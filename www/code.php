<?php 
$song= [];
$song = include 'song.php'; 

$songCommentsAr = [];

$countComments = rand(5, 10);

#fillComments($songCommentsAr, $countComments);

for ($i = 0; $i < $countComments; $i++) {
    if (rand(0, 1)) {
        $songCommentsAr[] = genComment2($song);
        var_dump($songCommentsAr[$i]);
        echo ' :int</br>';
        $countSubComments = rand(0, 2);
        for ($k = 0; $k < $countSubComments; $k++) {
            $songCommentsAr[]['comments'] = genComment2($song); 
        }
    } else {
        $songCommentsAr[] = genComment2($song);
    }
    var_dump($songCommentsAr[$i]);
    echo ' :ext</br>';
}

function genComment2(array $song):array
{
        $tmpTextAr = [];
        for ($j = 0; $j < 4; $j++) {
            $tmpTextAr[] = array_rand_value($song[$j]);
        }
        $text = implode(' ', $tmpTextAr);
        $array = [];
        $array[] = [
            'author' => array_rand_value($song['author']),
            'text' => $text,
        ];
        return $array;
}

echo ' </br>all</br>';
var_dump($songCommentsAr);


$viewcount=0;
$viewcount +=  rand(10,100);

#$arrayNames = ["Petya", "Vasya", "Siroja", "Maniasha", "ZlojAdmin"];

$uploadDir = __DIR__ . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;

scanOldFiles($uploadDir);

if (isset($_FILES['file']) && (int)$_FILES['file']['error'] === 0) {
    

    $filename = explode('.', $_FILES['file']['name']);
    $ext = array_pop($filename);

    $filename = md5(microtime() . implode('.', $filename));
    for ($i = 0; $i < 3; $i++) {
        $uploadDir .= mb_substr($filename, $i * 2, 2) . DIRECTORY_SEPARATOR;
    }
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    move_uploaded_file($_FILES['file']['tmp_name'], $uploadDir . $filename . '.' . $ext);
}

function genComment(array &$sourceArray): string
{
    for ($i = 0; $i < 4; $i++) {
        $temp = array_rand($sourceArray[$i]);
        if ($i !=0) $string .= ' ';
        $string .= $sourceArray[$i][$temp];
        #echo $string;
    }
    return $string;
}

function genName(array &$sourceArray): string
{
    $temp = array_rand($sourceArray);
    #checkDigitsecho $arrayNames[$temp];
    $string = $sourceArray[$temp];
    if ($string === "Admin") { 
        $string .= " (me)";
        } 
    return $string;
}

function genTime(): string
{
    // format 2021-01-02
    $randDate = rand(946674000,time());
    return date("Y-m-d", $randDate);
}


function scanOldFiles($uploadDir)
{
    $scanlist = [];
    $scanlist = array_diff(scandir($uploadDir), array('..', '.'));
    foreach ($scanlist as $item) {
        $itempath = $uploadDir . DIRECTORY_SEPARATOR . $item; 
        if (is_dir($itempath)) {
            scanOldFiles($itempath);
        } else {
            $stat = stat($itempath);
            $interval = (int)((time() - $stat['mtime'])/3600/365);
            if ($interval > 1) {
                unlink($itempath); //удаляем файл, если он старее 1 года
            }
        }
    }
}

function printComment(array $comment, string $you): string
{
    $author = $comment['author'] === $you ? $comment['author'] . '(me)' : $comment['author'];
    $time = genTime();
    $result = <<<HTML
<li class="comments__item">
    <img 
        class="comments__avatar"
        src="/image/{$comment['cmt_img']}"
        alt="Avatar"
    >
    <div class="comments__wrapper">
        <div class="comments__contact">
            <span class="comments__name"><{$author} -</span>
            <!--<time class="comments__time">{$comment['date']}</time>  -->
            <time class="comments__time">{$time}</time>
        </div>
        <p class="comments__desc">{$comment['text']}</p>
HTML;
    if (isset($comment['comments'])) {
        $result .= <<<HTML
        <p class="comments__sub">
            <ul class="comments__list">
HTML;
        foreach ($comment['comments'] as $subComment) {
            $result .= printComment($subComment, $you);
        }
        $result .= <<<HTML
            </ul>
        </p>
HTML;
    }

    $result .= <<<HTML
    </div>
</li>
HTML;

    return $result;
}

function array_rand_value(array $arr)
{
    return $arr[array_rand($arr)];
}
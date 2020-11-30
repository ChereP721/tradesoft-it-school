<?php
define('COPYRIGHT', 'My First Blog &#169; 2020'); /* const */
define('SECONDS_IN_DAY', 24 * 3600);
define('SECONDS_IN_YEAR', SECONDS_IN_DAY * 365);
define('MAX_LEVEL', 5);

include 'func.php';

$documentTitle = 'First Project'; //string
$viewsCount = 100 + rand(10, 50); //int
$canMakeReview = true; //book

$author = 'Admin';
$you = 'Admin';

$post = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$post2 = $post;
$post2 .= 'Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim.';


$authorArr = [
    'Admin',
    'Hater',
    'Pranker',
    'Fake',
    'Bot',
    'Unknown',
    'User1',
    'User2',
];

$commentAr = [];

function getRandomWord(int $wordNumber): string
{
    static $commentSongTplAr;
    if (!$commentSongTplAr) {
        $commentSongTplAr = include 'song.php';
    }

    $commentTplAr = $commentSongTplAr[$wordNumber];
    $countWord = count($commentTplAr);
    $indexWord = rand(0, $countWord - 1);

    return $commentTplAr[$indexWord];
}

function getRandomString(int $level, $author, $date): string
{
    if ($level > 3) {
        return '';
    }

    $tmpCommentAr = [];
    for ($wordNumber = 0; $wordNumber < 4; $wordNumber++) {
        $tmpCommentAr[] = getRandomWord($wordNumber);
    }

    $string = implode(' ', $tmpCommentAr);
    $authorText = $author.$string;
    $authorDate = $author.$date;

    static $existsSongStringAr = [];
    static $arrAuthorText = [];
    static $arrAuthorDate = [];

    if (in_array($authorText, $arrAuthorText, true) || in_array($authorDate, $arrAuthorDate, true)) {
        $string = 'Сообщения пользователя заблокированы. (БОТ! ОН БОТ!)';
    }

    $existsSongStringAr[] = $string;
    $arrAuthorText[] = $authorText;
    $arrAuthorDate[] = $authorDate;
    return $string;
}

function generateComments(int $commentCount, int $level = 0): array
{
    if ($level > MAX_LEVEL) {
        return [];
    }
    if ($commentCount <= 0) {
        return [];
    }

    global $authorArr;

    $commentAr = [];
    for ($commentNumber = 0; $commentNumber < $commentCount; $commentNumber++) {
        $time = time() - rand(0, 3600);
        $author = $authorArr[array_rand($authorArr)];
        $date = date('d.m.Y H:i:s', $time);

        if (!$commentText = getRandomString( 0, $author, $date)) {
            continue;
        }
        $comment = [
            'text' => $commentText,
            'author' => $author,
            'time' => $time,
            'date' => $date,
            'comments' => generateComments(rand(0, 20) - $level * 4, $level + 1),
        ];

        $commentAr[] = $comment;
    }

    usort($commentAr, static function (array $a, array $b) {
        return $a['time'] <=> $b['time'];
    });

    return $commentAr;
}
$commentCount = 5 + rand(0, 5);
$commentAr = generateComments($commentCount);


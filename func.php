<?php
function ed($value): void
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function getRandomWord(int $wordNumber): string
{
    static $commentSongTplAr;
    if (!$commentSongTplAr) {
        $commentSongTplAr = include 'song.php';
    }

    if (!empty($commentSongTplAr)) {
        $commentTplAr = $commentSongTplAr[$wordNumber];
        $countWord = count($commentTplAr);
        $indexWord = rand(0, $countWord - 1);
    }else  {
        echo 'Что-то пошло не так!';
    }
    return $commentTplAr[$indexWord];
}

function getRandomString(int $level = 0): string
{
    if ($level > 2) {
        return '';
    }

    $tmpCommentAr = [];
    for ($wordNumber = 0; $wordNumber < 4; $wordNumber++) {
        $tmpCommentAr[] = getRandomWord($wordNumber);
    }

    $string = implode(' ', $tmpCommentAr);

    static $existsSongStringAr = [];

    $existsSongStringAr[] = $string;

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

        if (!$commentText = getRandomString()) {
            continue;
        }
        $comment = [
            'text' => $commentText,
            'author' => $author,
            'time' => $time,
            'date' => $date,
            'comments' => generateComments(rand(0, 5) - $level * 4, $level + 1),
        ];

        $commentAr[] = $comment;
    }

    usort($commentAr, static function (array $a, array $b) {
        return $a['time'] <=> $b['time'];
    });

    $count = count($commentAr);
    $bots = [];
    for ($i=0; $i < $count; $i++) {
        for ($v=1; $v < $count ; $v++) {
            if ($i == $v) {
                continue;  
            }
            if ($commentAr[$i]['author'] == $commentAr[$v]['author'] && $commentAr[$i]['text'] == $commentAr[$v]['text']) {
                $a = [
                    'author' => $commentAr[$i]['author'],
                    'text' => $commentAr[$i]['text'],
                    'date' => $commentAr[$i]['date'],
                ];
                $bots[] = $a;
            }
        }
    };

    $botsCount = count($bots);
    if (!empty($bots)) {
        for ($i=0; $i < $botsCount; $i++) { 
            for ($d=0; $d < $count ; $d++) { 
                if ($bots[$i]['author'] == $commentAr[$d]['author'] && $bots[$i]['text'] == $commentAr[$d]['text']) {
                    $commentAr[$d]['text'] = 'Сообщение пользователя заблокированно!';
                }
                if ($bots[$i]['author'] == $commentAr[$d]['author'] && $bots[$i]['date'] == $commentAr[$d]['date']) {
                    $commentAr[$d]['text'] = 'Сообщение пользователя заблокированно!';
                }
            }
        }
    }
    return $commentAr;
}
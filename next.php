<?php

$title = "My First Document";
$title = $title . ' EVGEN';

$autor = "";
$you = "Admin";
$a = 100;
$b = '100';
$cmp = $a === $b;

$viewCount = 100 + rand(10, 100);

$popularPostCommentNight = '';
if ($viewCount > 150 && (date('H') > 17 || date("H") <6)) {
    $popularPostCommentNight = 'Good night! Your post is popular!';
};

$firstComment = '';
$secondComment = '';
$lastComment = '';

for($i = 0; $i < 120; $i++) {
    $case = rand(0,5);
    $symbol = '';
    switch ($case) {
        case 0:
            $symbol .= ' ';
            break;
        case 1:
            $symbol .= chr(rand(97, 122));
            break;
        case 2:
            $symbol .= chr(rand(97, 122));
            break;
        case 3:
            $symbol .= chr(rand(97, 122));
            break;
    };
    $firstComment .= $symbol;
}

for($i = 0; $i < 120; $i++) {
    $case = rand(0,5);
    $symbol = '';
    switch ($case) {
        case 0:
            $symbol .= ' ';
            break;
        case 1:
            $symbol .= chr(rand(97, 122));
            break;
        case 2:
            $symbol .= chr(rand(97, 122));
            break;
        case 3:
            $symbol .= chr(rand(97, 122));
            break;
    };
    $secondComment .= $symbol;
}

for($i = 0; $i < 120; $i++) {
    $case = rand(0,5);
    $symbol = '';
    switch ($case) {
        case 0:
            $symbol .= ' ';
            break;
        case 1:
            $symbol .= chr(rand(97, 122));
            break;
        case 2:
            $symbol .= chr(rand(97, 122));
            break;
        case 3:
            $symbol .= chr(rand(97, 122));
            break;
    };
    $lastComment .= $symbol;
}

$a = rand(0,4);
switch ($a) {
    case 0:
        $autor = 'Admin';
        break;
    case 1:
        $autor = 'You (Это вы)';
        break;
    default:
        $autor = 'Someone';
        break;

}

$year = rand(2000, 3000);
$month = rand(1, 12);
$day = rand(1, 31);

if($month == 2) {
    $day = rand(1,28);
};

$date = Date("F", mktime(0, 0, 0, $month, 0)).' '.$day.', '.$year;
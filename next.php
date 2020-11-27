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

$year = rand(2000, 2002);
$month = rand(1, 12);
$day = rand(1, 31);

$date = Date("F", mktime(0, 0, 0, $month, 0)).' '.$day.', '.$year;

$commentAutor = [
    'Admin',
    'Dexter',
    'Bilbo',
    'SuperDed'
];

$firstWord = [
    'Солнечный',
    'Траурный',
    'Плюшевый',
    'Бешеный',
    'Памятный',
    'Трепетный'
    ];
$secondWord = [
    'зайчик',
    'Верник',
    'глобус',
    'шарик',
    'щавель',
    'песик'
];
$thirdWord = [
    'стеклянного',
    'ванильного',
    'резонного',
    'широкого',
    'дешёвого',
    'горбатого'
];
$fourthWord = [
    'глаза',
    'плова',
    'Пельша',
    'мира',
    'деда',
    'жира'
];

$first = array_rand($firstWord);
$second = array_rand($firstWord);
$third = array_rand($firstWord);
$fourth = array_rand($fourthWord);

$firsta = array_rand($firstWord);
$seconda = array_rand($firstWord);
$thirda = array_rand($firstWord);
$fourtha = array_rand($fourthWord);

$firstb = array_rand($firstWord);
$secondb = array_rand($firstWord);
$thirdb= array_rand($firstWord);
$fourthb = array_rand($fourthWord);

$firstComment =  $firstWord[$first].' '.$secondWord[$second].' '.$thirdWord[$third].' '.$fourthWord[$fourth];
$secondComment =  $firstWord[$firsta].' '.$secondWord[$seconda].' '.$thirdWord[$thirda].' '.$fourthWord[$fourtha];
$lastComment =  $firstWord[$firstb].' '.$secondWord[$secondb].' '.$thirdWord[$thirdb].' '.$fourthWord[$fourthb];

<?php
define('MY DOCUMENT_TITLE', 'Document title this project');

$h2Title = "My best second title";

//random view//
$viewCount = 0;

$useIncView = true;
$viewCount += rand(10, 100);
if ($useIncView && $viewCount < 50) {
    $viewCount *= 10;
} elseif ($viewCount < 10) {
    $viewCount *= 1000;
} else {

}

//random comments//
$r = array(
    'привет',
    'это tradesoft',
    'web-программирование',
    'it-школа',
    'мы выводим рандомный комментарий',
    'все просто',
);
$rand_comment = $r[array_rand($r)];

//random_date//
$rand_date =  date('d.m.Y', strtotime('+'.rand(0,90).' day')); // берем текущую дату и прибавляем к ней 90 дней рандомно

//random_author
$ra = array(
    'A.Norin',
    'D.Elkin',
    'D.Druzhko',
    'S.Pupochkina',
    'I.Ivanov',
    'N.Petrova',
    'admin',
);
$rand_auth = $ra[array_rand($ra)];

switch ($rand_auth) {
    case 'D.Elkin':
        $rand_auth = "D.Elkin (это вы)";
        break;
}






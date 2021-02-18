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
$r = [
    'привет',
    'это tradesoft',
    'web-программирование',
    'it-школа',
    'мы выводим рандомный комментарий',
    'все просто',
];
$randComment = $r[array_rand($r)];

//random_date//
$randDate =  date('d.m.Y', strtotime('+'.rand(0,90).' day'));

//random_author
$ra = [
    'a.Norin',
    'd.Elkin',
    'd.Druzhko',
    's.Pupochkina',
    'i.Ivanov',
    'n.Petrova',
    'admin',
];
$randAuth = $ra[array_rand($ra)];

if ($randAuth === "admin") {
    $randAuth = $randAuth . ' (это вы)';
}


//Генерация картинки
if (isset($_FILES['image'])) {
    $fileName = $_FILES['image']['name'];
    $fileTmp = $_FILES['image']['tmp_name'];

    $extension = substr($fileName, strpos($fileName,'.'), strlen($fileName)-1);
    $fileName = uniqid() . '.' . $extension;
    move_uploaded_file($fileTmp, "uploads/" . $fileName);

}

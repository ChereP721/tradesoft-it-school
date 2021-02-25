<?php
include "comments.php";

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit;
}

$data = $_POST;
header('Content-Type: application/json');
echo json_encode($data);

$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$ext = strtolower($ext);
if ($ext != 'png' &&  $ext != 'gif' && $ext != 'jpg') {
    echo "<script> alert( 'Некорректный формат файла! Файл должен быть формата jpg, png или gif.' ); </script>";
    exit;
}
$path = 'images' . DIRECTORY_SEPARATOR . rand(0, 1) . DIRECTORY_SEPARATOR . rand(0, 1) . DIRECTORY_SEPARATOR;
if (!is_dir($path)) {
    mkdir($path, 0777, true);
}
move_uploaded_file($_FILES['image']['tmp_name'], $path . md5(microtime()) . '.' . $ext);

recursiveDelete($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'images');

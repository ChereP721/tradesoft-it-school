<?php

$wordArr1 = array('Пост', 'Комментарий', 'Изображение');
$wordArr2 = array('добавляется', 'смотрится', 'отображается');
$wordArr3 = array('отлично', 'странно', 'не очень');
$comArr = array();

//заполняем массив рандомными фразами из существующих массивов
for ($i=0; $i<4; $i++) {
    if ($i = 1) {
        $comArr[$i-1] = $wordArr1[rand(0, 2)];
    }
    if ($i = 2) {
        $comArr[$i-1] = $wordArr2[rand(0, 2)];
    }
    if ($i = 3) {
        $comArr[$i-1] = $wordArr3[rand(0, 2)];
    }
}
//соединяем все элементы массива в строку
$spaceSeparated = implode(" ", $comArr);

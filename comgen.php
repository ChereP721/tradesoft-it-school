<?php

$wordArr1[] = array('Пост', 'Комментарий', 'Изображение');
$wordArr2[] = array('добавяется', 'смотрися', 'отображается');
$wordArr3[] = array('отлично', 'странно', 'не очень');
$comArr[] = array();

//заполняем массив рандомными фразами из существующих массивов
for ($i=0; $i<3; $i++) {
    if ($i = 0) {
        $comArr[$i] = $wordArr1[rand(0, 2)];
    }
    if ($i = 1) {
        $comArr[$i] = $wordArr2[rand(0, 2)];
    }
    if ($i = 2) {
        $comArr[$i] = $wordArr3[rand(0, 2)];
    }
}
//соединяем все элементы массива в строку
$spaceSeparated = implode(" ", $comArr);

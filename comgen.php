<?php

$wordArr1 = array('Пост', 'Комментарий', 'Изображение');
$wordArr2 = array('добавяется', 'смотрися', 'отображается');
$wordArr3 = array('отлично', 'странно', 'не очень');
$comArr = array();

//заполняем массив рандомными фразами из существующих массивов
for ($i=0; $i<3; $i++) {
    switch ($i) {
        case 0:
            $comArr[0] = $wordArr1[rand(0,2)];
            break;
        case 1:
            $comArr[1] = $wordArr2[rand(0,2)];
            break;
        case 2:
            $comArr[2] = $wordArr3[rand(0,2)];
            break;
    }
}
//соединяем все элементы массива в строку
$space_separated = implode(" ", $comArr);

echo $space_separated;
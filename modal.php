<?php

define('MY_DOCUMENT_TITLE', 'Заголовок документа. В Данный момент Блог!');

$quotes[] = 'Фиговый блог';
$quotes[] = 'Даже регистрации нет!!!!! >_<';
$quotes[] = 'Чувак, ты пробовал подключать стили???';
$quotes[] = 'А как оставить коммент? кнопка не работает!';
$quotes[] = 'Разраб, не делай больше такие сайты!';
$quotes[] = 'У меня жена лучше кодит';
$quotes[] = 'Вырви глаз!';
$quotes[] = 'Жизни негров имеют значение!';
$quotes[] = 'Тут вообще нет JS или что?';
$quotes[] = 'Тут нет JS, разраб не умеет ими пользоваться. ахаха)))';
$quotes[] = 'Тут не только JS нет.';
srand ((double) microtime() * 1000000);
$random_number = rand(0,count($quotes)-1);
$random_number2 = rand(0,count($quotes));
$random_number3 = rand(0,count($quotes)+1);

?>


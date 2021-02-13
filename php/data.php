<?php

// Общие моменты
#Навигация
$goods = 'Изделия';
$categories = 'Категории';
#Титульник страницы
$titleListGoods = 'Изделия ручной работы';

// генерация комментария
/*
$word1 = array("Здравствуйте. ", "Привет! ", "Добрый день. ", "Шалом! ");
$rand_keys = array_rand($word1,1);


$word2 = array("Прекрасная работа. ","Потрясающее изделие. ", "Милая вещичка.. ", "");
$rand_keys = array_rand($word2,1);

$word3 = array ("Подарите? :) ", "Сколько стоит?", "Можно мне такую? ", "Возьму за любые деньги. ", "");
$rand_keys = array_rand($word3,1);

$comments = array ([$word1],[$word2],[$word3]);

*/



$word_1 = ["Здравствуйте. ","Привет! ","Добрый день. ","Шалом! "];
$max_mas_W1 = count($word_1, COUNT_RECURSIVE) - 1;
$random_word_1 = rand(0, $max_mas_W1);

$word_2 = ["Прекрасная работа. ","Потрясающее изделие. ", "Милая вещичка.. ", ""];
$max_mas_W2 = count($word_2, COUNT_RECURSIVE) - 1;
$random_word_2 = rand(0, $max_mas_W2);

$word_3 = ["Подарите? :) ", "Сколько стоит?", "Можно мне такую? ", "Возьму за любые деньги. ", ""];
$max_mas_W3 = count($word_3, COUNT_RECURSIVE) - 1;
$random_word_3 = rand(0, $max_mas_W3);

$comments = $word_1 [$random_word_1] . $word_2 [$random_word_2] . $word_3 [$random_word_3];


$users = ["Admin", "Сергей", "Ульяна", "Иван", "Алексей", "Дарья"];
$max_mas_auyor = count($users, COUNT_RECURSIVE) - 1;
$random_auyor = rand(0, $max_mas_auyor);

//случайная дата
/*
function DateTime() 
{
    $year = 2018 + rand(0,3);
    $month = rand(1,12);
    $day = rand(1,31);
   return "{$year}-{$month}-{$day}";
}

echo date('d-m-y H:i:s');

*/

$DateTime = date('d.m.Y H:i:s', strtotime('-'.rand(0,5000).' day'));
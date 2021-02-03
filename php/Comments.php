<?php

$word_1 = array ("Здравствуйте. ","Привет! ","Добрый день. ","Шалом! ");
$max_mas_W1 = count($word_1, COUNT_RECURSIVE) - 1;
$random_word_1 = rand(0, $max_mas_W1);


$word_2 = array ("Прекрасная работа. ","Потрясающее изделие. ", "Милая вещичка.. ", "");
$max_mas_W2 = count($word_2, COUNT_RECURSIVE) - 1;
$random_word_2 = rand(0, $max_mas_W2);

$word_3 = array ("Подарите? :) ", "Сколько стоит?", "Можно мне такую? ", "Возьму за любые деньги. ", "");
$max_mas_W3 = count($word_3, COUNT_RECURSIVE) - 1;
$random_word_3 = rand(0, $max_mas_W3);

$comments = $word_1 [$random_word_1] . $word_2 [$random_word_2] . $word_3 [$random_word_3];


?>
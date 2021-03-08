<?php
// Случайный пользователь

$users = ['Admin', 'Сергей', 'Ульяна', 'Иван', 'Алексей', 'Дарья'];
$i = array_rand ($users);
echo "$users[$i]<br>";

//случайная дата

$DateTime = date('d.m.Y H:i:s', strtotime('-'.rand(0,5000).' day'));
echo "$DateTime<br>";
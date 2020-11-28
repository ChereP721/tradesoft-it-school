<?php

define('VIEWPORT', 'width=device-width, initial-scale=1.0');

// Title
$title = 'BLOG';

// random number of views
$viewCount = 100;
$viewCount += rand(10, 100);

// add adate
$date = (date('F j, Y'));
$datetime = (date('Y-m-j'));

// random comment
$commentList = [
	'Отлично!',
	'Спасибо, очень полезно!',
	'Познавательно!',
	'Интересно!',
	'Хорошая статья!',
	'Посоветую друзьям!',
	'Было полезно!',
	'Круто!',
	'Отстой!',
];

// random autor
$you = 'Чебурашка';

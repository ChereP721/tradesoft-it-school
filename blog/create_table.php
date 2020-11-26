<?php

	$db_host = '127.0.0.1';
	$db_user = 'blog_base';
	$db_pass = 'blog_base';
	$db_name = 'blog_base';

	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name,3306);
 
	if (mysqli_connect_errno()) {
		die('Ошибка подключения: ' . mysqli_connect_error()); 
	};
	
	$sql = "
		CREATE TABLE IF NOT EXISTS `bl_users` (
		`id` int(6) NOT NULL AUTO_INCREMENT,
		`login` varchar(8) NOT NULL,
		`passw` varchar(6) NOT NULL,
		`name` varchar(20) NOT NULL,
		`flag_adm` bool,
		PRIMARY KEY (`id`),
		UNIQUE KEY `login` (`login`)
		) DEFAULT CHARSET = utf8 AUTO_INCREMENT=1;
		
		CREATE TABLE IF NOT EXISTS `bl_pages` (
		`id` int(6) NOT NULL AUTO_INCREMENT,
		`title` varchar(255) NOT NULL,
		`alias` varchar(255) NOT NULL,
		`author_id` int(6) NOT NULL,
		`author` varchar(255),
		`content` text,
		`flag_cat` bool,
		PRIMARY KEY (`id`)
		) DEFAULT CHARSET = utf8 AUTO_INCREMENT=1;
		
		CREATE TABLE IF NOT EXISTS `bl_post` (
		`id` int(6) NOT NULL AUTO_INCREMENT,
		`title` varchar(255) NOT NULL,
		`alias` varchar(255) NOT NULL,
		`image` varchar(255),
		`author_id` int(6) NOT NULL,
		`view` int(6) NOT NULL,
		`author` varchar(255),
		`post_date` date NOT NULL,
		`intro` text,
		`content` text,
		`cat_id` int(6) NOT NULL,
		PRIMARY KEY (`id`)
		) DEFAULT CHARSET = utf8 AUTO_INCREMENT=1;
		
		CREATE TABLE IF NOT EXISTS `bl_comment` (
		`id` int(6) NOT NULL AUTO_INCREMENT,
		`author` varchar(255),
		`author_id` int(6),
		`post_id` int(6),
		`parent_id` int(6),
		`content` text,
		`comment_date` date NOT NULL,
		PRIMARY KEY (`id`)
		) DEFAULT CHARSET = utf8 AUTO_INCREMENT=1;
		
		
		INSERT INTO `bl_post` (`id`, `title`, `alias`, `image`, `author_id`, `view`, `author`, `post_date`, `intro`, `content`, `cat_id`) VALUES (
		NULL, 
		'Голова оленя: papercraft шаблон для скачивания и пошаговая инструкция', 
		'post1', 
		'_img/pic1.jpg', 
		'1', 
		'1', 
		'Admin', 
		'2020-11-07', 
		'Для создания 3D головы оленя, вам не обязательно нужен 3D принтер и навыки в дизайне. Одним из способов является технология паперкрафт, наличие свободного времени и терпение, так как вам придется вырезать и склеивать…', 
		'Для создания 3D головы оленя, вам не обязательно нужен 3D принтер и навыки в дизайне. Одним из способов является технология паперкрафт, наличие вободного времени и терпение, так как вам придется вырезать и склеивать…', 
		'2');		
	";
	
	if (!$result = $mysqli->multi_query($sql)) {
		echo "Номер ошибки: " . $mysqli->errno . "\n";
		echo "Ошибка: " . $mysqli->error . "\n";
		exit;
	}
	
//$result->free();
$mysqli->close();

?>
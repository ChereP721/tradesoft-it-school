<!DOCTYPE html>
<?php
	define (LANG,"ru");
	
	require_once('generate.php'); /* функции генерации комментариев */
	
	require_once('recursion.php'); /* рекурсивные функции */
	
	require_once('formprocessing.php'); /* обработчик формы */
	
	$author = 'Admin';
	$you = 'User';
	
	$viewcount=1000;
	$populacomment = '';
	
	if ($viewcount > 150 && (date('H') >= 17 || date('H') < 6)) {
		$populacomment = 'Good night! Your Comment nice';
	} else {
		$populacomment = '100';
	};
	
	
 ?>
<html lang="<?=LANG;?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Паперкрафт, развертки, DIY, поделки из бумаги</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a8c7e60bcc.js" crossorigin="anonymous"></script>
  <style>


  </style>
  
</head>
<body>

<header class="header">
	<div class="header__navwrap">
	<nav class="header__nav">
		<a href="/" class="header__nav__item header__nav__item__logo"><img src="img/logo.png" alt="Papercraft"></a>
		<a href="/" class="header__nav__item">Blog</a>
		<a href="/" class="header__nav__item">Categories</a>
		<a href="/" class="header__nav__item">Downloads</a>
		<a href="/" class="header__nav__item">Contact</a>
	</nav>
	<div class="header__right">Papercraft - современное оригами</div>
	</div>
</header>
<div class="line"></div>
<main class="main">
	<section class="section">
	<h1 class="section__h1">Паперкрафт, развертки, DIY, поделки из бумаги</h1>
		<article class="section__article">
			<h2 class="section__article__h2"><a href="" class="section__article__h2__link">Голова оленя: papercraft шаблон для скачивания и пошаговая инструкция</a></h2>
			<div class="section__article__author">
				<i class="far fa-calendar-alt"></i> 
				<time datetime="2020-11-15">15 ноября 2020</time> опубликовал: 
				<i class="fas fa-user-circle"></i> <a href="" class="section__article__author__link"> <?= $author == $you ? 'Это Вы' : $author; ?></a>
			</div>
			<figure class="section__article__figure">
				<a href=""><img src="img/pic1.jpg" width="200" alt="Картинка"></a>
				<figcaption>Голова оленя: papercraft шаблон для скачивания и пошаговая инструкция</figcaption>
			</figure>
			<div class="section__article__post">
				<p><a href="">Факториал</a> числа: <b><?=factorial(9);?></b></p>
				<p>Ряд Фибоначчи: <b><?=findRowFibo(20);?></b></p>
				<p>Случайное имя файла для script.js: <b><?=fileRand('script.js');?></b></p>
			</div>
				<a href="" class="section__article__nextlink">Читать далее  →</a>
				<footer class="section__article__footer">			
					<ul>
						<li><i class="fas fa-eye"></i> <?=$populacomment;?></li>
						<li><i class="fas fa-folder-open"></i> <a href="">Категории</a></li>
						<li><i class="fas fa-tags"></i> <a href="">Теги 1</a>, <a href="">Теги 2</a>, <a href="">Теги 3</a></li>
						<li><i class="fas fa-comments"></i> <a href="">10 комментариев</a></li>
					</ul>
				</footer>
				<div class="section__article__blockname">Комментарии:</div>
				<?=gen_comment(rand(1,8),rand(5,20)); /* генерация комментариев, (количество, количество фраз) */?>							
		</article>


<div class="form__wrap">
	<div class="form__wrap__title">Добавить публикацию (комментарий):</div>
	<?=formAdd()?>
</div>
		
	</section>
</main>
<div class="line"></div>
<footer class="footer">
	<div class="footer__logo">
		<a href="/"><img src="img/logo.png" alt="Papercraft"></a>
	</div>
	<div class="footer__text">
		<ul>
			<li class="footer__text__list__item"><i class="fas fa-map-marked-alt"></i><a href="https://yandex.ru/maps/-/CCUAJMhHHC" target="_blank">610000, РФ, г. Киров, ул. Молодой Гвардии, 82</a></li>
			<li class="footer__text__list__item"><i class="fas fa-phone-square"></i><a href="tel:+88001509999">8-800-150-99-99</a></li>
			<li class="footer__text__list__item"><i class="fas fa-envelope"></i><a href="mailto:info@papercraft.com">info@papercraft.com</a></li>
		</ul>
	</div>
	<div class="footer__copyr">
		PaperCraft.com © 2020 | TradeSoft IT-School | <a href="">Политика защиты персональных данных</a>
	</div>
</footer>


</body>
</html>
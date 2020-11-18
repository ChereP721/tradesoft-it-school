<!DOCTYPE html>
<?php
	define (LANG,"ru");
	
	require_once('generate.php');
	
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a8c7e60bcc.js" crossorigin="anonymous"></script>
  <style>

  @media screen and (max-width: 1024px) {
	.right_head, nav .logo {
			display:none;
		}
	header .nav_wrap {
			min-width: auto ;
		}
	.foot_logo, .foot_text, .foot_copyr {
			width:auto !important;
			margin:0 0 10px 10px !important;
		}

	main {
			padding: 0 20px;
		}		
	}
  
	body {
		font-family: 'Roboto','Arial',sans-serif;
		font-size:13px;
	}
	body > header {
		width: 100%;
		background: #404040;
		height: 100px;
		display: flex;
	}
	.nav_wrap {
		display: flex;
		min-width: 1024px;
		margin: 0 auto;
		background: #404040;
	}
	nav {
		padding: 10px 30px;
		line-height:10px;
   }
   .right_head {
		color:#7FFFBE;
		margin: 0 0 0 auto;
		line-height:100px;
   }
	nav img {
		border:1px solid #fff;
   }
	nav img:hover {
		border:1px solid #7FFFBE;
   }
	nav a, nav a:hover, nav a:visited{
		color:#fff;
		text-transform: uppercase;
		text-decoration: none;
		font-weight:bold;
   }
   nav a:hover{
		text-decoration: underline;
   }
   nav a {
		margin: 10px;
		vertical-align: middle;
   }
   
   main {
		max-width:1024px;
		margin:0 auto;
   }
   
   .line {
		height:8px;
		background: #5b666a;
   }
   
	form{
		/* display:none; */
	}
	
	body > footer {
		background: #404040;
		padding:20px 20px 10px;
		display:flex;
		flex-direction: column;
	}
	
	main h1 {
		line-height: 24px;
		margin: 35px 0 20px;
		font-weight: bold;
		font-size: 22px;
		color: #5b666a;
	}
	
	article {
		/* border-bottom:solid 1px #5b666a; */
		margin: 0 0 10px 0;
		padding: 0 0 10px 0;
	}
	
	article h2 {
		line-height: 24px;
		margin: 15px 0;
		font-weight: bold;
		font-size: 16px;
		color: #000;
	}
	
	article p {
		font-size: 16px;
		line-height: 24px;
		margin: 10px 0 0 0;
	}
	
	.time_create, .bt_open, .art_foot, .f_item input[type=submit] {
		border:solid 1px #B5C2FF;
		padding:0px 15px;
		display:inline-block;
		border-radius:4px;		
		line-height:31px;
		margin: 0 0 15px 0;
	}
	
	
	article a, article a:hover, article a:visited, .time_create i {
		color: #0088A0;
		text-decoration: none;
	} 
	
	article a:hover {
		text-decoration: underline;
	}
	
	article h2 .h2_link {
		color: #000;
	}
	
	article h2 a.h2_link:hover {
		text-decoration: none;
		color: #0088A0;
	}
	
	figcaption {
		display:none;
	}
	
	.bt_open, .f_item input[type=submit] {
		line-height:29px;
		margin: 10px 0;
		background:#fff;
	}
	.bt_open:hover, .f_item input[type=submit]:hover {
		background:#B5C2FF;
		color:#fff;
		cursor: pointer;
	}
	.art_foot {
		display:block;
		border:solid 1px #EAEAEA;
	}
	
	.art_foot li, .foot_text li {
		display: inline-flex;
		vertical-align: middle;
	}
	.art_foot li i {
		margin: 8px;
		color:#B7B7B7;
	}
	
	.foot_logo {
		width:1024px;
		margin:0 auto 10px;
	}
	
	.foot_text {
		width:1024px;
		margin:0 auto 5px;
		color:#cfcfcf;
		line-height: 30px;
		border-bottom:1px solid #717171;
	}
	
	.foot_copyr {
		width:1024px;
		margin:0 auto 10px;
		color:#cfcfcf;
		line-height: 30px;
	}
	
	.foot_text li i {
		margin: 8px 8px 8px 20px;
		color:#717171;
	}
	
	.foot_text li:first-child i {
		margin: 8px 8px 8px 0;
	}
	
	.foot_logo img {
		border:1px solid #cfcfcf;
	}
	
	.foot_text a, .foot_copyr a {
		color:#cfcfcf;
		text-decoration:none;
	}
	
	.foot_text a:hover, .foot_copyr a:hover {
		text-decoration:underline;
	}
	
	.form_wrap {
		padding: 10px 0;
		margin:10px 0;		
	}
	.f_title {
		display: inline-block;
		padding:10px 5px 10px 15px;
		border-left:5px solid #B5C2FF;
		background:#f7f7f7;
		font-size:16px;
		font-weight:500;
		margin:10px 0 20px;
		width:95%;
	}
	
	.f_item {
		margin:0 0 20px;
	}
	
	.f_item label{
		width: 25%;
		display: inline-block;
		vertical-align: top;
		line-height: 20px;
		font-size:15px;
		color:#5b666a;
	}
	
	.f_item input[type=text] {
		width: 40%;
		padding: 0 10px;
		font-size: 15px;
		outline: 0;
		height: 30px;
		border: 1px solid #e5e5e5;
	}
	
	.f_item textarea {
		width: 40%;
		padding: 5px 10px;
		font-size: 15px;
		outline: 0;
		border: 1px solid #e5e5e5;
		height:200px;
	}
	
	.f_item input[type=text]:hover, .f_item textarea:hover {
		border: 1px solid #717171;
	}
	
	.f_item input[type=text]:active, .f_item input[type=text]:focus {
		border: 2px solid #717171;
		height:28px;
	}
	
	.f_item textarea:active, .f_item textarea:focus {
		border: 2px solid #717171;
		height:198px;
	}
	
	.comments_wrap {
		margin: 0 25px 20px 50px;
		background: #f2f2f2;
		padding: 7px 16px;		
	}
	
	.comments_wrap p {
		font-size:14px;
	}
	.comments_wrap p time {
		font-size:12px;
		color:#5b666a;
	}
  </style>
  
</head>
<body>

<header>
	<div class="nav_wrap">
	<nav>
		<a href="/" class="logo"><img src="img/logo.png" alt="Papercraft"></a>
		<a href="/">Blog</a>
		<a href="/">Categories</a>
		<a href="/">Downloads</a>
		<a href="/">Contact</a>
	</nav>
	<div class="right_head">Papercraft - современное оригами</div>
	</div>
</header>
<div class="line"></div>
<main>
	<section>
	<h1>Паперкрафт, развертки, DIY, поделки из бумаги</h1>
		<article>
			<header><h2><a href="" class="h2_link">Голова оленя: papercraft шаблон для скачивания и пошаговая инструкция</a></h2></header>
			<div class="time_create">
				<i class="far fa-calendar-alt"></i> 
				<time datetime="2020-11-15">15 ноября 2020</time> опубликовал: 
				<i class="fas fa-user-circle"></i> <a href=""> <?= $author == $you ? 'Это Вы' : $author; ?></a></div>
			<figure>
				<a href=""><img src="img/pic1.jpg" width="200" alt="Картинка"></a>
				<figcaption>Голова оленя: papercraft шаблон для скачивания и пошаговая инструкция</figcaption>
			</figure>	
				<p>Для создания 3D головы оленя, вам не обязательно нужен 3D принтер и навыки в дизайне. 
				Одним из способов является технология паперкрафт, наличие вободного времени и терпение, так как вам придется вырезать и склеивать…</p>
				<button class="bt_open">Читать далее  →</button>
				<footer class="art_foot">			
					<ul>
						<li><i class="fas fa-eye"></i> <?=$populacomment;?></li>
						<li><i class="fas fa-folder-open"></i> <a href="">Категории</a></li>
						<li><i class="fas fa-tags"></i> <a href="">Теги 1</a>, <a href="">Теги 2</a>, <a href="">Теги 3</a></li>
						<li><i class="fas fa-comments"></i> <a href="">10 комментариев</a></li>
					</ul>
				</footer>
				<div class="f_title">Комментарии:</div>
				<?=gen_comment(rand(1,2),rand(5,20)); /* генерация комментариев, (количество, количество фраз) */?>
				<hr>
				<?=create_parser_comment(rand(1,3),rand(5,20));?>				
		</article>


<div class="form_wrap">
	<div class="f_title">Добавить публикацию (комментарий):</div>
	<form method="POST" name="u_add">
	<div class="f_item">
		<label for="f_author">Автор</label>
		<input type="text" id="f_author" name="u_name">
	</div>
	<div class="f_item">
		<label for="f_mail">E-mail</label>
		<input type="text" id="f_mail" name="u_mail">
	</div>
	<div class="f_item">
		<label for="f_pic">Иллюстрация</label>
		<input type="file" id="f_pic" name="u_pic">
	</div>
	<div class="f_item">
		<label for="f_text">Текст публикации</label>
		<textarea name="u_txt" id="f_text"></textarea>
	</div>
	<div class="f_item">
		<input name="f_send" type="submit" value="Добавить публикацию">
	</div>
	</form>
</div>
		
	</section>
</main>
<div class="line"></div>
<footer>
	<div class="foot_logo">
		<a href="/"><img src="img/logo.png" alt="Papercraft"></a>
	</div>
	<div class="foot_text">
		<ul>
			<li><i class="fas fa-map-marked-alt"></i><a href="https://yandex.ru/maps/-/CCUAJMhHHC" target="_blank">610000, РФ, г. Киров, ул. Молодой Гвардии, 82</a></li>
			<li><i class="fas fa-phone-square"></i><a href="tel:+88001509999">8-800-150-99-99</a></li>
			<li><i class="fas fa-envelope"></i><a href="mailto:info@papercraft.com">info@papercraft.com</a></li>
		</ul>
	</div>
	<div class="foot_copyr">
		PaperCraft.com © 2020 | TradeSoft IT-School | <a href="">Политика защиты персональных данных</a>
	</div>
</footer>


</body>
</html>
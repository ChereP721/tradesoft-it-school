<?php
include 'data.php';
include 'functions.php';

?>


<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="<?= VIEWPORT ?>">
	<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles/style.css">
	<title><?= $title ?></title>
</head>

<body>

	<header class="header">
		<div class="container header__wrapper">
			<div class="header__logo">
				<a href="#!">
					<img src="https://livedemo00.template-help.com/wordpress_50742/wp-content/themes/theme50742/images/logo.png" alt="Web Hosting">
				</a>
			</div>
			<nav class="header__nav">
				<div class="header__list-wrapper">
					<!--Верно ли назван класс?-->
					<ul class="header__list">
						<li class="header__item">
							<a href="#!" target="_blank" class="header__link">BLOG</a>
						</li>
						<li>
							<a href="#!" class="header__link">CATEGORIES</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>

	<main class="main">
		<div class="container">
			<h1 class="main__heading main__heading--level-1">Blog</h1>

			<article class="post">
				<div class="post__wrapper">
					<header class="post__header">
						<h2 title="Mauris posuere" class="post__title">Mauris posuere</h2>
					</header>

					<div class="post__contant">
						<figure class="post__img">
							<img src="https://livedemo00.template-help.com/wordpress_50742/wp-content/uploads/2014/07/Depositphotos_12240275_original-200x150.jpg" alt="Mauris posuere">
						</figure>
						<div class="post__group">
							<p class="post__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed blandit massa vel
								mauris
								sollicitudin dignissim.
								Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim. Phasellus fringilla
								hendrerit
								lectus nec vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
								turpis
								egestas. In faucibus, risus eu volutpat pellentesque, massa felis feugiat velit, nec...
							</p>
							<div>
								<a href="#!" class="button button--read-more post__link">Read more</a>
							</div>
						</div>
					</div>
					<hr>

					<footer class="post__footer">
						<div class="post__info--line">
							<div class="post__item">
								<i class="fa fa-calendar"></i>
								<time datetime="2013-03-14">March 14, 2013</time>
							</div>
							<div class="post__item">
								<i class="fa fa-user"></i>
								<a href="#!" class="post__link"><?= ($autor === $you ? 'This is you!!!' : $autor) ?></a>
							</div>
						</div>
						<hr>
						<div class="post__info--line">
							<div class="post__item">
								<i class="fa fa-bookmark"></i>
								<a href="#!" class="post__link">Donec Porta Diam Eu Massa</a>
							</div>
							<div class="post__item">
								<i class="fa fa-tag"></i>
								<a href="#!" class="post__link">Augue Quis</a>
								<a href="#!" class="post__link">Bibendum Mauris</a>
							</div>
						</div>
						<hr>
						<div class="post__info--line">
							<div class="post__item">
								<i class="fa fa-comments"></i>
								<a href="#!" class="post__link">No comments</a>
							</div>
							<div class="post__item">
								<i class="fa fa-eye"></i>
								<span><?= $viewCount ?></span>
							</div>
							<div class="post__item">
								<i class="fa fa-thumbs-up"></i>
								<span>0</span>
							</div>
							<div class="post__item">
								<i class="fa fa-thumbs-down"></i>
								<span>0</span>
							</div>
						</div>
						<hr>
					</footer>
				</div>
			</article>

			<article>
				<ol>
					<li>
						<p><?= $commentList[rand(0, (count($commentList) - 1))] ?></p>
						<div>
							<img src="images\png\avatar.png" alt="avatar" class="avatar">
						</div>
						<a href="#!"><?= addRandomAutor($you) ?></a>
						<time datetime="<?= $datetime ?>"><?= $date ?></time>
					</li>
					<li>
						<p><?= $commentList[rand(0, (count($commentList) - 1))] ?></p>
						<div>
							<img src="images\png\avatar.png" alt="avatar" class="avatar">
						</div>
						<a href="#!"><?= addRandomAutor($you) ?></a>
						<time datetime="<?= $datetime ?>"><?= $date ?></time>
					</li>
					<li>
						<p><?= $commentList[rand(0, (count($commentList) - 1))] ?></p>
						<div>
							<img src="images\png\avatar.png" alt="avatar" class="avatar">
						</div>
						<a href="#!"><?= addRandomAutor($you) ?></a>
						<time datetime="<?= $datetime ?>"><?= $date ?></time>
					</li>
				</ol>
				<hr>


				<!-- Comment form -->
				<form action="functions.php" method="post" name="form-comment" enctype="multipart/form-data">
					<p>
						<label for="name">Name</label>
						<input type="text" id="name" placeholder="Name"><br>
						<label for="email">Email</label>
						<input type="text" id="email" placeholder="Email"><br>
						<label for="website">Website</label>
						<input type="text" id="website" placeholder="Website"><br>
						<label for="comment">Your comment</label>
						<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Your comment"></textarea><br>
						<input type="file" name="image">
						<button type="submit">Submit</button>
					</p>
				</form>
			</article>

		</div>
	</main>
	<footer></footer>
</body>

</html>
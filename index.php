<?php
 include 'next.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<header class="header">
    <nav class="header__nav">
        <a href="/" class="header__link header__link__active">BLOG</a>
        <a href="/" class="header__link">CATEGORIES</a>
    </nav>
</header>
<main class="container main">
    <h1 class="main__heading main_heading__level__1">BLOG</h1>
    <article class="post">
        <div class="post__wrapper">
            <header class="post__header">
                <h2 class="post__title" title="Mauris">Mauris</h2>
            </header>
            <div class="post__content">
                <figure class="post__img">
                    <img src="https://sites.google.com/site/informaciontehnologii/_/rsrc/1468756530458/sajt/2-4-etapy-sozdania-veb-sajta/3.jpg" alt="WEB">
                </figure>
                <div class="post__group">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="/" class="post__link btn">Read more</a>
                </div>
            </div>
            <footer class="post__footer">
                <div class="post__info-line">
                    <i class="fa fa-calendar post__footer-icon"></i>
                    <time datetime="<?=$date?>"><?=$date?></time>
                </div>
                <div class="post__info-line">
                    <i class="fa fa-user post__footer-icon"></i>
                    <a href="/"><?=$autor?></a>
                </div>
                <div class="post__info-line">
                    <i class="fa fa-comments post__footer-icon"></i>
                    <a href="/">3 Comments</a>
                </div>
                <div class="post__info-line">
                    <i class="fa fa-eye post__footer-icon"></i>
                    <span><?=$viewCount?></span>
                    <?=$popularPostCommentNight?>
                </div>
            </footer>
        </div>
        <ul class="comments__group">
            <li class="comment__item">
                <h2 class="comment__title">First comment</h2>
                <div class="comment__autor">
                    <?=$commentAutor[array_rand($commentAutor)]?>
                </div>
                <time datetime="<?=$date?>"><?=$date?></time>
                <div class="comment__content">
                    <p><?=$firstComment?></p>
                </div>
            </li>
            <li class="comment__item">
                <h2 class="comment__title">Second comment</h2>
                <div class="comment__autor">
                    <?=$commentAutor[array_rand($commentAutor)]?>
                </div>
                <time datetime="<?=$date?>"><?=$date?></time>
                <div class="comment__content">
                    <p><?=$secondComment?></p>
                </div>
            </li>
            <li class="comment__item">
                <h2 class="comment__title">Last comment</h2>
                <div class="comment__autor">
                    <?=$commentAutor[array_rand($commentAutor)]?>
                </div>
                <time datetime="<?=$date?>"><?=$date?></time>
                <div class="comment__content">
                    <p><?=$lastComment?></p>
                </div>
            </li>
        </ul>
    </article>
</main>
<footer></footer>
<form action="/" method="post" name="form-comment">
    <p>
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Name">
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Email">
    </p>
    <p>
        <label for="comment">Comment</label>
        <textarea id="comment" placeholder="You comment"></textarea>
    </p>
    <button type="submit">Submit Comment</button>
</form>
</body>
</html>
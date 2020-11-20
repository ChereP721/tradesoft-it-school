<?php
 include 'next.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<header>
    <nav>
        <a href="/">
            <img src="https://livedemo00.template-help.com/wordpress_50742/wp-content/themes/theme50742/images/logo.png" alt="logo">
        </a>
        <a href="/">BLOG</a>
        <a href="/">CATEGORIES</a>
    </nav>
</header>
<main>
    <h1>BLOG</h1>
    <article>
        <header>
            <h2 title="Mauris">Mauris</h2>
        </header>
        <figure>
            <img src="https://sites.google.com/site/informaciontehnologii/_/rsrc/1468756530458/sajt/2-4-etapy-sozdania-veb-sajta/3.jpg" alt="WEB">
            <figcaption></figcaption>
        </figure>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button">Read more</button>
        <hr>
        <footer>
            <div>
                <i class="fa fa-calendar"></i>
                <time datetime="2013-03-14"><?=$date?></time>
            </div>
            <div>
                <i class="fa fa-user"></i>
                <a href="/"><?=($autor)?></a>
            </div>
            <div>
                <i class="fa fa-comments"></i>
                <a href="/">3 Comments</a>
                <ul>
                    <li>
                        <h3>First comment</h3>
                        <p><?=$firstComment?></p>
                    </li>
                    <li>
                        <h3>Second comment</h3>
                        <p><?=$secondComment?></p>
                    </li>
                    <li>
                        <h3>Last comment</h3>
                        <p><?=$lastComment?></p>
                    </li>
                </ul>
            </div>
            <div>
                <i class="fa fa-eye"></i>
                <span><?=$viewCount?></span>
                <hr>
                <?=$popularPostCommentNight?>
            </div>
        </footer>
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
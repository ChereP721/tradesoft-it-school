<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>A Great Demo on CodePen</title>
</head>
<body>

<header class="header">
    <nav class="header__nav">
        <a class="header__link header__link_active" href="/">BLOG</a>
        <a class="header__link" href="/categories.php">CATEGORIES</a>
    </nav>
</header>

<main class="main container">
    <h1 class="main__heading main__heading_level_1">Blog</h1>
    <article class="post">
        <header class="post__header">
            <h2 title="Mauris posuere" class="post__title"><?= $h2Title; ?></h2>
        </header>
        <div class="post__wrapper">
            <figure class="post_link">
                <img src="https://livedemo00.template-help.com/wordpress_50742/wp-content/uploads/2014/07/Depositphotos_12240275_original-200x150.jpg"
                     alt="Mauris posuere"/>
            </figure>
            <div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took
                    a galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing Lorem Ipsum passages, and more recently
                    with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <a href="/" class="post_img">Read more</a>
            </div>
        </div>
        <footer>
            <div>
                <div class="post_item">
                    <i class="post_icon fa fa-calendar"></i>
                    <time datetime="2013-03-14T20:28:57" class="post_text"><?=$randDate?></time>
                </div>
                <div class="post_item">
                    <i class="post_icon fa fa-user"></i>
                    <a href="/" class="post_icon"><?=$randAuth?></a>
                </div>
                <div class="post_item" title="categories">
                    <i class="post_icon fa fa-bookmark"></i>
                    <a href="/" class="post_icon">Categories</a>
                </div>
                <div class="post_item">
                    <i class="post_icon fa fa-comment"></i>
                    <a href="/" class="post_icon" title="Comment"><?=$randComment?></a>
                </div>
            </div>

            <div title="Number of view.">
                <i class="fa fa-eye"></i>
                <span><?= $viewCount; ?></span>
            </div>

            <div title="3 response">
                <span>Comments</span>
            </div>

            <div>
                <button class="comments_btn" type="button" data-cout="1" id="add-comment">
                    <span>add comment</span>
                </button>
            </div>
            <ul>
                <li>
                    <img src="https://c7.hotpng.com/preview/627/514/557/police-clip-art-sticker-portable-network-graphics-telegram-police-thumbnail.jpg"
                         alt="Avatar admin"/>
                    <div class="comments_content">
                        <i class="post_icon fa fa-calendar"></i>
                        <time datetime="2013-03-14T20:28:57" class="post_text"><?= $randDate ?></time>
                        <a href="/" class="post_icon"><?= $randAuth ?></a>
                    </div>
                    <p class="comment">
                        <?= $randComment ?>
                    </p>
                </li>
            </ul>
        </footer>
    </article>
</main>

<footer>
    <span>My First Blog &#169; 2020</span>
</footer>

<!---modal-->
<div class="modal">
    <form class="modal__form" action="data.php" method="POST" name="form-comment" enctype="multipart/form-data">
        <button type="button" class="modal__btn-close">
            <i class="fa fa-close"></i>
        </button>
        <legend class="modal__title">Leave a comment</legend>
            <p>
                <label class="modal__label" for="Name" >Name</label>
                <input class="modal__input" type="text" id="name" placeholder="Name">
            </p>
            <p>
                <label class="modal__label" for="email" >E-mail</label>
                <input class="modal__input" type="text" id="email" placeholder="E-mail" data-required>
            </p>
            <p>
                <input class="modal__input" type="file" name="image" id="file" accept="image/*"/>
                <label class="modal__label" for="myfile"></label>
            </p>
            <p>
                <label class="modal__label" for="" >Comment</label>
                <textarea class="modal__input" name="comment " id="comment" cols="30" rows="10" placeholder="Comment"></textarea>
            </p>
        <div class="loader__wrapper">
        </div>
        <div class="notification">
            <p class="notification__title"></p>
            <p class="notification__text"></p>
        </div>
            <p>
                <button class="modal__btn" type="submit" id="btnAddComment" data-cout="1">Show comment</button>
            </p>
    </form>
</div>
<script src="index.js"></script>
</body>
</html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'data.php';

function showComments(array $commentAr): void
{
    foreach ($commentAr as $comment) {
        echo '<li class="comments__item">
                <div class="comments__bloc">  
                    <img class="comments__avatar" src="https://secure.gravatar.com/avatar/5cdc09662dd539303e316621ec21b6be?s=65&d=https%3A%2F%2Fsecure.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D65&r=G" alt="Avatar admin">
                    <div class="comments__wrapper">
                        <div class="comments__contact">
                            <span class="comments__name">'.$comment['author'].'</span>
                            <time class="comments__time" datetime="2013-03-14T20:28:57">'.$comment['date'].'</time>
                        </div>
                        <p class="comments__desc">'.$comment['text'].'</p>
                    </div>
                </div>
            </li>';
    }
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$documentTitle?></title>
</head>
<body class="body">
    <div class="shadow"></div>
<header class="header">
    <div class="header__wrapper container">
        <nav class="header__nav">
            <a href="/blog.php" class="header__link">BLOG</a>
            <a href="/categories.php" class="header__link">CATEGORIES</a>
        </nav>
            <?php if(empty($_SESSION['user'])) {
                echo '<div class="header__link">
                        <span id="using">Авторизация</span>
                      </div>';

            } else {
                echo 'Hi, '.$_SESSION['user'].' <br> 
                    <form action="/" class="auth__form" method="post">
                        <input type="hidden" name="form-name" value="form-auth"/>
                        <input type="hidden" name="logout" value="logout">
                        <button type="submit" id="logout">LogOut</button>
                    </form>';
            }
            ?>
    </div>
</header>
    <main class="container main">
        <h1 class="main__heading main__heading_level_1">Blog</h1>
        <article class="post">
            <div class="post__wrapper">
                <header class="post__header">
                    <h2 class="post__title" title="Mauris posuere">Mauris posuere</h2>
                </header>
                <div class="post__content">
                    <figure class="post__img">
                        <img src="https://livedemo00.template-help.com/wordpress_50742/wp-content/uploads/2014/07/Depositphotos_12240275_original-200x150.jpg" alt="">
                    </figure>
                    <div class="post__group">
                        <p class="post__desc"><?=$post?></p>
                        <a href="/" class="post__link">Read more</a>
                    </div>
                </div>
                <footer class="post__footer">
                    <div class="post__info-line">
                        <div class="post__item">
                            <i class="post__icon fa fa-calendar"></i>
                            <time datetime="2013-03-14T20:28:57" class="post__text">March 14, 2013</time>
                        </div>
                        <div class="post__item">
                            <i class="post__icon fa fa-user"></i>
                            <a  href="/"
                                class="post__text"
                                title="<?=($author === $you ? 'Your posts' : 'Posts by Author')?>">
                                <?=($author === $you ? 'You' : 'Author')?>
                            </a>
                        </div>
                    </div>
                    <div class="post__info-line">
                        <div class="post__item" title="View all posts in Uncategorized">
                            <i class="post__icon fa fa-bookmark"></i>
                            <a href="/" class="post__text">Uncategorized</a>
                        </div>
                        <div class="post__item">
                            <i class="post__icon fa fa-comment"></i>
                            <a href="/" class="post__text" title="Comment on Mauris posuere">No comments</a>                 
                        </div>
                    </div>
                    <div class="post__info-line">
                        <div class="post__item" title="Number of view.">
                            <i class="post__icon fa fa-eye"></i>
                            <span class="post__text"><?=$viewsCount?></span>
                        </div>
                        <div id="add-comment" title="3 response">
                            <span class="post__text">Add to comments</span>
                        </div>
                    </div>
                    </div>
                    <div class="comments">
                    <button class="comments__btn" type="button" data-count="<?= count($commentAr) ?>">
                        <span>Show Comments</span>
                    </button>
                    <ul class="comments__list">
                        <?=showComments($commentAr)?>
                    </ul>
                </div>
            </footer>
            </div>
        </article>
    </main>
    <footer class="footer">
        <span class="footer__copyright"><?php echo COPYRIGHT; ?></span>
    </footer>
    <!-- Подготовка формы для добавления комментариев  -->
    <div class="modal">
        <div class="modal__group">
            <div class="modal__container">
                <button type="button" class="modal__btn-close">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" name="comment" enctype="multipart/form-data" class="modal__form">
                <input type="hidden" name="form-name" value="form-comment" />
                <fieldset>
                    <legend>Leave a comment</legend>
                    <div class="modal__wrapper">
                        <label
                            class="modal__label"
                            for="name"
                            data-msg='Обязательное для заполнения'
                        >Name</label>
                        <input class="modal__input"
                            data-required
                            type="text" id="name" name="name" placeholder="name">

                        <label class="modal__label" for="email" data-msg='Обязательное для заполнения'>E-mail</label>
                        <input class="modal__input" data-required type="text" id="email" name="email" placeholder="e-mail">
                        <label class="modal__label" for="file">Image</label>
                        <input class="modal__label" name="file" type="file" id="file" accept="image/*">
                        <label class="modal__label" data-msg='Обязательное для заполнения' for="comment">Your comment</label>
                        <textarea class="modal__textarea" data-required name="comment" id="comment" cols="30" rows="10"></textarea>
                        <button class="modal__btn" type="button">Submit Comment</button>
                    </div>
                </fieldset>
            </form>
            <div class="loader__wrapper">
                <i class="loader__icon fa fa-spinner"></i>
            </div>
            <div class="notification">
                <h3 class="notification__title"></h3>
                <p class="notification__text"></p>
            </div>
        </div>
    </div>

    <!--Авторизации -->
    <div class="users-form">
        <form action="/" method="post" id="form-auth" class="forms active-form">
             <input type="hidden" name="form-name" value="form-auth"/>
             <input required type="text" name="login" placeholder="Логин">
             <input required type="password" name="password" placeholder="Пароль">
             <button class="btn" type="submit">Авторизация</button>    
        </form>
        <form action="/" method="post" class="forms active-form">
            <input type="hidden" name="form-name" value="form-auth"/>
            <input type="hidden" name="reup" value="reup"/>
            <button class="btn" type="submit">Востановить сессию</button>    
        <form>
    </div>
    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>
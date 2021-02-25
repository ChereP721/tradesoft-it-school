<?php
include_once "comments.php";

$h2Title = "my best 2title";

define('MY_DOCUMENT_TITLE', 'блог');

$viewCount = 0;
$viewCount++;
$viewCount--;

$viewCount += rand(10, 100);




?>



<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title><?= MY_DOCUMENT_TITLE ?></title>
</head>

<body>
    <header class="header">
        <nav class="header__nav">
            <a href="/blog.php" class="header__link">BLOG</a>
            <a href="/categories.php" class="header__link">CATEGORIES</a>

            <!--авторизация-->
            <form action="<?= $_SERVER['REQUEST_URI'] ?>" class="auth__form" method="post">
                <input type="hidden" name="form-name" value="form-auth" />
                <div class="auth__group">
                    <label class="auth__label" for="phone">Login</label>
                    <input class="auth__input" type="tel" id="login" name="login" placeholder="login">
                </div>
                <div class="auth__group">
                    <label class="auth__label" for="Password">Password</label>
                    <input class="auth__input" type="password" id="Password" name="Password" placeholder="password">
                </div>
                <button class="btn" type="submit">SIGN IN</button>
            </form>

        </nav>
    </header>
    <main class="main container">
        <h1 class="main__heading main__heading_level1">Blog</h1>
        <article class="post">
            <div class="post__wrapper">

                <header class="post__header">
                    <h2 class="post__title">Как тестировать ВАР и не сойти с ума...</h2>
                </header>
                <figure>
                    <img src="http://risovach.ru/upload/2014/12/mem/trudnyy-rebenok_68830785_orig_.jpg" width=400px alt="">
                </figure>
                <p>Спокойствие и только спокойствие. 5 стадий принятия неизбежного. </p>
                <button type="button" class="btn btn-primary">Читать полностью</button>

            </div>
            <hr>
            <footer>
                <div>
                    <div>
                        <i class="fa fa-calendar"></i>
                        <time datetime="2013-03-14T20:28:57">March 14, 2013</time>
                    </div>
                    <div>
                        <i class="fa fa-user"></i>
                        <a href="/" title="Posts by Author">Author</a>
                    </div>
                </div>
                <hr>
                <div>
                    <div title="View all posts in Uncategorized">
                        <i class="fa fa-bookmark"></i>
                        <a href="/">Uncategorized</a>
                    </div>
                    <div>
                        <i class="fa fa-comment"></i>
                        <a href="/" title="Comment on Mauris posuere">No comments</a>
                    </div>
                </div>
                <hr>
                <div title="Number of view.">
                    <i class="fa fa-eye"></i>
                    <span>136</span>
                </div>
                <hr>
                <div title="3 response">
                    <span>Комментарии</span>
                </div>
                <div>
                    <button type="button" class="btn btn-primary">
                        <span>Показать комментарии</span>
                    </button>
                    <?php
                    $comments = createRandomComments(3, 25);
                    for ($i = 0; $i < count($comments['date']); $i++) {
                    ?>
                        <ul id="comments__list">
                            <li>
                                <!--<img src="/" alt="Avatar admin">-->
                                <div>
                                    <div>
                                        <time class="fa fa-calendar"><?= $comments['date'][$i] ?></time>
                                        <span class="comment_span_author fa fa-user"><?= $comments['author'][$i] ?></span>
                                    </div>
                                    <p class="fa fa-comment">
                                        <?= $comments['comment'][$i] ?>
                                    </p>
                                </div>
                            </li>
                            <hr>
                        </ul>
                    <?php } ?>
                </div>
            </footer>
            <button type="submit" id="addComment" class="btn btn-primary">Добавить комментарий</button>
        </article>
    </main>
    <footer>
        <span>Моя первая страничка&#169; 2020</span>
    </footer>

    <!-- Подготовка формы для добавления комментариев  -->
    <div id="modal" class="modal">
        <form method="post" name="commentForm" enctype="multipart/form-data">>
            <fieldset>
                <p>
                    <label for="name" class="label_f">Имя</label>
                    <input data-required="true" name="name" type="text" id="name" class="input_f" placeholder="name">
                </p>
                <p>
                    <label for="email" class="label_f">E-mail</label>
                    <input data-required="true" name="email" type="text" id="email" class="input_f" placeholder="e-mail">
                </p>
                <p>
                    <label for="comm" class="label_f">Комментарий</label>
                    <textarea data-required="true" name="comm" id="comm" class="input_f" cols="30" rows="10"></textarea>
                </p>
                <p>
                    <label for="img" class="label_f">Выберите изображение</label>
                    <input type='file' name="image" class="btn btn-primary" accept="image/*" value="прикрепить изображение">
                </p>
                <p>
                    <button id="btnSubm" type="submit" class="btn btn-primary">Отправить</button>
                </p>
            </fieldset>
        </form>
    </div>

    <script src="script.js"></script>

</body>

</html>
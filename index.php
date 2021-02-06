<?php

include_once 'modal.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>BLOG</title>
</head>

<body>
    <!-- ДЗ по HTML, вторая попытка запушить -->
    <header class="header">
        <nav class="header__nav">
            <a class="header_nav_menu" href="/">BLOG</a>
            <a class="header_nav_menu" href="/">CATEGORIES</a>
        </nav>
    </header>
    <section class="main__header">
        <h1 class="main__title">Blog</h1>
        <!-- <?= MY_DOCUMENT_TITLE ?> -->
        <article>
            <header>
                <h2 class="main__title_post">Mauris posuere</h2>
            </header>
            <div class="main__post">
                <img class="main__img" src="https://livedemo00.template-help.com/wordpress_50742/wp-content/uploads/2014/07/Depositphotos_12240275_original-200x150.jpg" alt="Mauris posuere">

                <div class="main__blok_post">
                    <p class="main__post_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, similique. Odit fuga veniam eveniet, sit impedit nihil unde voluptatibus nobis. Amet nostrum alias dolor reprehenderit sed dignissimos debitis totam aut? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, similique. Odit fuga veniam eveniet, sit impedit nihil unde voluptatibus nobis. Amet nostrum alias dolor reprehenderit sed dignissimos debitis totam aut? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, similique. Odit fuga veniam eveniet, sit impedit nihil unde voluptatibus nobis. Amet nostrum alias dolor reprehenderit sed dignissimos debitis totam aut?</p>
                    <div class="btn">
                        <button class="main__post_button">Read more</button>
                    </div>
                    <hr>
                </div>
            </div>

            <footer>
                <!-- блок фав иконки -->
                <div class="fav_1">
                    <div class="fav__calendar">
                        <i class="fa fa-calendar"></i>
                        <time datetime="2021-01-14T20:28:57"> January 27, 2021</time>
                    </div>
                    <div class="fav__user">
                        <i class="fa fa-user"></i>
                        <a href="/"> Author</a>
                    </div>
                </div>
                <hr>
                <div class="fav__2">
                    <div class="fav__bookmark">
                        <i class="fa fa-bookmark"></i>
                        <a href="/"> Uncategorized</a>
                    </div>
                    <div class="fav__comment">
                        <i class="fa fa-comment"></i>
                        <a href="/"> no comment</a>
                    </div>
                </div>
                <hr>
                <div class="fav__eye">
                    <i class="fa fa-eye"> 0</i>
                </div>
                <hr>
                </div>
                <!-- блок просмотра коммента -->
                <div>
                    <div class="show">
                        <p class="show__comment">Comments</p>
                        <button class="show__btn">Show Comments</button>
                    </div>
                    <ul>
                        <li><img class="show__img" src="https://forums.drom.ru/pp.php?u=http://hsto.org/storage1/51c49914/7a1470ce/c905694e/4f74d479.png" alt="Avatar admin">
                            <div>
                                <i class="fa fa-user"></i>
                                <span class="fav__user">admin</span>
                                <i class="fa fa-calendar"></i>
                                <time class="fav__calendar" datetime="2021-01-14T20:28:57"> January 27, 2021</time>
                            </div>
                            <p class="show__post"><?php echo ($quotes[$random_number]);  ?></p>
                        </li>
                        <li><img class="show__img" src="https://forums.drom.ru/pp.php?u=http://hsto.org/storage1/51c49914/7a1470ce/c905694e/4f74d479.png" alt="Avatar admin">
                            <div>
                                <i class="fa fa-user"></i>
                                <span class="fav__user">admin</span>
                                <i class="fa fa-calendar"></i>
                                <time class="fav__calendar" datetime="2021-01-14T20:28:57"> January 27, 2021</time>
                            </div>
                            <p class="show__post"><?php echo ($quotes[$random_number2]);  ?></p>
                        </li>
                        <li><img class="show__img" src="https://forums.drom.ru/pp.php?u=http://hsto.org/storage1/51c49914/7a1470ce/c905694e/4f74d479.png" alt="Avatar admin">
                            <div>
                                <i class="fa fa-user"></i>
                                <span class="fav__user">admin</span>
                                <i class="fa fa-calendar"></i>
                                <time class="fav__calendar" datetime="2021-01-14T20:28:57"> January 27, 2021</time>
                            </div>
                            <p class="show__post"><?php echo ($quotes[$random_number3]);  ?></p>
                        </li>
                    </ul>

                </div>
            </footer>
        </article>
    </section>
    <section class="footer">
        <footer class="main__title_post">My First Blog 2021</footer>
        <!-- modal -->
        <div class="modal">
            <form action="/" method="POST" enctype="multipart/form-data" name="form-comment">
                <fieldset class="">

                    <legend class="main__title_post">Leave a comment</legend>
                    <div class="modal__person">
                        <input required placeholder="Ваше имя" name="name" type="text" class="order__input">
                        <input required placeholder="Ваш Email" name="email" type="email" class="order__input">
                    </div>
         
                    <br>
                    <br>
                    <input required placeholder="Ваш комментарий" name="text" type="text" class="order__comment">
                    <br>
                    <br>
                    <button class="modal-btn" type="button">
                        <span>Submit Comment</span>
                    </button>
                </fieldset>
            </form>

        </div>
    </section>

</body>

</html>
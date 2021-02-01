<?php

include_once 'modal.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
</head>

<body>
    <!-- ДЗ по HTML, вторая попытка запушить -->
    <header>
        <nav>
            <a href="/">BLOG</a>
            <a href="/">CATEGORIES</a>
        </nav>
    </header>
    <section class="Main">
        <h1><?= MY_DOCUMENT_TITLE ?></h1>

        <article>
            <header>
                <h2>Mauris posuere</h2>
            </header>
            <div>
                <figure>
                    <img src="https://livedemo00.template-help.com/wordpress_50742/wp-content/uploads/2014/07/Depositphotos_12240275_original-200x150.jpg" alt="Mauris posuere">
                </figure>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, similique. Odit fuga veniam eveniet, sit impedit nihil unde voluptatibus nobis. Amet nostrum alias dolor reprehenderit sed dignissimos debitis totam aut?</p>
                    <button>Read more</button>
                    <hr>
                </div>
            </div>
            <footer>
                <!-- блок фав иконки -->
                <div>
                    <div>
                        <i class="fa fa-calendar"></i>
                        <time datetime="2021-01-14T20:28:57"> January 27, 2021</time>
                    </div>
                    <div>
                        <i class="fa fa-user"></i>
                        <a href="/"> Author</a>
                    </div>
                    <hr>
                    <div>
                        <i class="fa fa-bookmark"></i>
                        <a href="/"> Uncategorized</a>
                    </div>
                    <div>
                        <i class="fa fa-comment"></i>
                        <a href="/"> no comment</a>
                    </div>
                    <hr>
                    <div>
                        <i class="fa fa-eye"> 0</i>
                    </div>
                    <hr>
                </div>
                <!-- блок просмотра коммента -->
                <div>
                    <div>
                        <p>Comments</p>
                        <button>Show Comments</button>
                    </div>
                    <ul>
                        <li><img src="https://forums.drom.ru/pp.php?u=http://hsto.org/storage1/51c49914/7a1470ce/c905694e/4f74d479.png" alt="Avatar admin">
                            <div>
                                <span>admin</span>
                                <time datetime="2021-01-14T20:28:57"> January 27, 2021</time>
                            </div>
                            <p><?php  echo ($quotes[$random_number]);  ?></p>
                        </li>
                        <li><?php  echo ($quotes[$random_number2]);  ?></li>
                        <li><?php  echo ($quotes[$random_number3]);  ?></li>
                    </ul>

                </div>
            </footer>
        </article>
    </section>
    <section class="footer">
        <footer>My First Blog 2021</footer>
        <!-- modal -->
        <div class="modal">
            <form action="/" method="POST" enctype="multipart/form-data" name="form-comment">
                <fieldset>
                    <legend>Leave a comment</legend>
                    <label for="client-name">
                        <span>Name</span>
                        <input type="text" id="name">
                    </label>
                    <br>
                    <br>
                    <label for="email">
                        <span>Email</span>
                        <input type="email" id="email" placeholder="Ваш емайл">
                    </label>
                    <br>
                    <br>
                    <label for="comment">
                        <span>Your comment</span>
                        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                    </label>
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
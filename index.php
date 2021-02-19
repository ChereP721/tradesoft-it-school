<?php
include_once 'data.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=MY_DOCUMENT_TITLE?></title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
          rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet" />


</head>
<body>
<header class="header">
    <nav class="header__nav">
        <a href="/" class="header__link">BLOG</a>
        <a href="/" class="header__link">Categiries</a>
    </nav>
    <div class="auth">
        <?php if($isAuth) { ?>
            Привет, <?=$_SESSION['user']?>!
        <a href="/?out=1">Выйти</a>
        <?php } else { ?>
    <form action="<?=$thisUrl?>" class="auth__form" method="post">
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
        <? } ?>
    </div>

</header>
<main class="main container">
    <h1 class="main__heading main__heading_level_1">Blog</h1>
    <article class="post">
        <div class="post__wrapper">
        <header class="post__header">
            <h2 class="post__title" title="<?=$h2Title?>"><?=$h2Title?></h2>
        </header>
        </div>
        <div>
            <figure>
                <img src="https://livedemo00.template-help.com/wordpress_50742/wp-content/uploads/2014/07/Depositphotos_12240275_original-200x150.jpg" alt="img of article 1"/>
            </figure>
            <div>
                <p>Text of article #1. Bla-bla</p>
                <a href="/">Read more</a>
            </div>
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
                    <a href="/">Admin</a>
                </div>

            </div>
            <hr/>

            <div>
                <div>
                    <i class="fa fa-bookmark"></i>
                    <a href="/">Uncategoriezed</a>
                </div>
                <div>
                    <i class="fa fa-comments"></i>
                    <a href="/">No comments</a>
                </div>

            </div>
            <hr/>

            <div>
                <div>
                    <i class="fa fa-eye"></i>
                    <span><?=$viewCount?> Views</span>
                </div>
                <div>
                    <button id="add-comment">Add comment</button>
                </div>

            </div>
            <hr/>
            <div title="3 response">
                <span>Comments</span>
            </div>
            <div>
                <button data-count="1">
                    <span>Show Comments</span>
                </button>
                <ul>
                    <li>
                        <img src="https://dummyimage.com/50" alt="avatar"/>
                        <div>
                            <div>
                                <span><?=generateUser()?> -</span>
                                <time datetime="<?=$randomDateISO?>"><?=$randomDateComment?></time>
                            </div>
                            <p><?=generatePhraze(mt_rand(5,10))?></p>
                        </div>
                    </li>
                    <!-- первый вариант -->
                    <?php for($i=0;$i<2;$i++){?>
                    <li>
                        <?=generatePhraze(mt_rand(5,10))?>
                    </li>
                    <?php }?>

                    <!-- второй вариант -->
                    <?php
                    for($i=0;$i<2;$i++){
                       echo "<li>";
                       echo generatePhraze(mt_rand(5,10));
                       echo "</li>";
                     }
                    ?>


                </ul>
            </div>
        </footer>
    </article>
</main>
<footer>
    <span>&copy; Copyright</span>
</footer>

<!-- modal form -->
<div class="modal">
    <button class="model__btn-close">X</button>
    <form action="/index.php" method="post" id="form-comment" name="formcomment" enctype="multipart/form-data">
        <fieldset>
            <legend>Leave a comment</legend>
            <p>
                <label for="name">
                    <span>Name</span>
                    <input type="text" name="name" data-required="true" id="name" placeholder="Your name"/>
                </label>
            </p>
            <p>
                <label for="email">
                    <span>Email</span>
                    <input type="email" name="email" data-required="true" id="email" placeholder="Your email"/>
                </label>
            </p>
            <p>
                <label for="file">
                    <span>File</span>
                    <input type="file" name="file" id="file" accept="image/*"/>
                </label>
            </p>
            <p>
                <label for="comment">
                    <span>Your comment</span>
                    <textarea name="comment" data-required="true" id="comment" cols="30" rows="10"></textarea>
                </label>
            </p>
            <p>
                <button type="submit" class="modal__btn">Submit comment</button>
            </p>
        </fieldset>

    </form>
</div>

<div class="notice">
    <div class="notice__title"></div>
    <div class="notice__text"></div>
</div>
<script src="js.js"></script>
</body>
</html>
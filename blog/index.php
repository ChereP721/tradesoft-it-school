<?php
define('SECOND_IN_HOUR',60);
$comment = "/комментарий/";
$title='My_first_doc';
$title=$title.'Artem'.rand(10,100).'TEST';
$viewCount=100+rand(10,100);
define('VIEWPORT','width=device-width, initial-scale=1.0');

$author = 'User 18';
$you = 'User 18';

$popularCommentPost = '';
var_dump(date('Y-'));
if ($viewCount>150 && (date('H')>=1|| date('H')<6)) {
    $popularCommentPost = 'Good night! Your post is popular';
}


function com($comment) {
$rand_num=rand(0,4);
switch ($rand_num) {
    case 0:
        $comment = "Отличный блог!";
        break;
    case 1:
        $comment = "Хотелось бы больше узнать об  авторе.";
        break;
    case 2:
        $comment = "Хорошее оформление страницчки!";
        break;
    case 3:
        $comment = "Мало Информации, дополните информацию!";
        break;
    case 4:
        $comment = "Отвратительная верстка страницы!}:-)";
        break;
}
return $comment;

}
$comment1 = com($comment);



?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link  rel="stylesheet"  type="text/css" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" >
    <title>Hello</title>
</head>
        <body>
    <header class="header">
        <nav class="header__nav">
            <a href="/"><figure><img width="200" alt="Logo" src="img/logo.svg"></figure></a>
            <a href="/" class="header__link">BLOG</a>
            <a href="/" class="header__link">CATEGORIES</a>
        </nav>
    </header>
        <main class="container main">
        <h1 class="main__heading main__heading_level_1">BLOG</h1>
            <article class="post">
                <div class="post_wrapper">

                <header>
                    <h2 class="post_title" title="Артем Монахов">Артем Монахов</h2>
                </header>
                    <div class="post_content">
                <figure class="post_img">
                    <img class="photo" width="200" src="https://sun9-14.userapi.com/impg/PjF9gzzrGveY07NJAkQuo-MeJ5XPvkQN_-dYTg/HUyxvOd92Ic.jpg?size=1192x1624&quality=96&proxy=1&sign=482fbe1db06643d7c8bf9d2c02e8a392" alt="my_photo" >
                </figure>

                    <div class="post__group">
                    <p class="post__desc">Всем привет! Добро пожаловать на мой первый сайт. Еще недавно я понятия не имел, кто такой верстальщик, а теперь я нешел <a href="https://vk.com/event199308548">этот курс по HTML и CSS</a> и поставил перед собой цель - стать им. У меня появилось сразу два коучера - Норин Алексей и Романов Сергей, которые не позволят мне расслабиться и будут следить за моими успехами.</p>
                    <p>Мое первое задания написать лэндинговый сайт - блог, применив все знания начинающего web-разработчикам.</p>
                    </div>

                    </div>

                   <div class="post__more"><button  type="button">Read more</button></div>

                <section>
                    <h2>Навыки</h2>
                    <dl class="skills">
                        <dt>HTML</dt>
                        <dd><div class="skills-level skills-level-ok" style="width: 60%;">60%</div></dd>
                        <dt>CSS</dt>
                        <dd><div class="skills-level skills-level-ok" style="width: 20%">20%</div></dd>
                        <dt>JS</dt>
                        <dd><div class="skills-level" style="width: 10%">10%</div></dd>
                    </dl>
                </section>

                <hr>
                <footer class="post__footer">
                    <div class="post__info-line">
                    <ul>
                        <li><i class="fas fa-calendar-alt"><time datetime="2020-11-14T20:28:57"> March 14,2020</time></i></li>
                        <li><i class="fas fa-eye"></i> Количество просмотров - <a><?=($viewCount)?></a></li>
                        <li><i class="fas fa-user"></i> <a href="/"><?=($author===$you? 'This is you!!':$author)?></a></li>
                        <li><i class="fas fa-comments"></i> <a href="/">10 комментариев</a></li>
                    </ul>
                    </div>
                    <hr>
                    <ul>
                        <li><div><?=$popularCommentPost?></div></li>
                        <li><div><?=com($comment)?></div></li>
                    </ul>


                </footer>
                </div>
                <hr>


            </article>
        </main>


        <form action="/" method="post" name="form-comment">

            <div><label for="name">Name</label>
                <input type="text" id="name" value="" placeholder="name"></div>


            <div><label for="name">E-mail</label>
                <input type="text" id="mail" value="" placeholder="mail"></div>
            <div>
                <p><textarea rows="10" cols="45" name="text"></textarea></p>
            </div>
                <div>
                    <button type="submit">Send comment</button>
                </div>

            </form>
        </body>
</html>
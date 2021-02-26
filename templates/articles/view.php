<?php include __DIR__ . '/../header.php'; ?>
    <section class="main__header">
    <h1 class="main__title">Blog</h1>


    <h1><?= $article->getName() ?></h1>
    <p><?= $article->getText() ?></p>


    <footer>
    <!-- блок фав иконки -->
    <div class="fav_1">
        <div class="fav__calendar">
            <i class="fa fa-calendar"></i>
            <time datetime="2021-01-14T20:28:57"> January 27, 2021</time>
        </div>
        <div class="fav__user">
            <i class="fa fa-user"></i>
            <a href="/"> <?= $article->getAuthor()->getNickname() ?></a>
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
<?php include __DIR__ . '/../footer.php'; ?>
<?php include __DIR__ . '/../header.php'; ?>
<section class="main__header">
    <h1 class="main__title">Blog</h1>
    <!-- <?= MY_DOCUMENT_TITLE ?> -->
    <article>
        <header>
            <?php foreach ($articles as $article): ?>
            <h2 class="main__title_post"><a href="/www/articles/<?= $article->getId() ?>"><?= $article->getName() ?></a></h2>
        </header>
        <div class="main__post">
            <img class="main__img" src="https://livedemo00.template-help.com/wordpress_50742/wp-content/uploads/2014/07/Depositphotos_12240275_original-200x150.jpg" alt="Mauris posuere">

            <div class="main__blok_post">
                <p class="main__post_text"><?= $article->getText() ?></p>

                <div class="btn">
                    <button  class="main__post_button">Read more</button>
                </div>
                <hr>
            </div>

        </div>
        <?php endforeach; ?>


<?php include __DIR__ . '/../footer.php'; ?>

<!-- пробный модал -->

<script src="style.js"></script>


</body>

<?php foreach ($this->post as $post) { ?>
    <figure class="section__figure">
        <div class="section__figure__link">
            <a href="category.php?id=<?=$post['id']; ?>"><img src="<?=$post['image']; ?>" alt="<?=$post['title']; ?>"></a>
        </div>
        <figcaption><a href="category.php?id=<?=$post['id']; ?>"><?=$post['title']; ?></a></figcaption>
    </figure>
<?php } ?>
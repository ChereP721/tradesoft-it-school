<?php foreach ($this->post as $post) { ?>
<h2 class="section__article__h2"><a href="post.php?id=<?=$post['id']; ?>" class="section__article__h2__link"><?=$post['title']; ?></a></h2>
    <article class="section__article">
        <div class="section__article__author">
            <i class="far fa-calendar-alt"></i>
            <time datetime="<?=$post['post_date']; ?>"><?=strftime('%e %B %G',strtotime($post['post_date'])); ?></time> опубликовал:
            <i class="fas fa-user-circle"></i> <a href="user.php?id=<?=$post['user_id']; ?>" class="section__article__author__link"> <?=$post['user_name']; ?></a>
        </div>
        <figure class="section__article__figure">
            <div class="section__article__figure__link"><a href="post.php?id=<?=$post['id']; ?>"><img src="<?=$post['image']; ?>" width="200" alt="<?=$post['title']; ?>"></a></div>
            <figcaption><?=$post['title']; ?></figcaption>
        </figure>
			<div class="section__article__post">
				<p><?=$post['intro']; ?></p>			
			</div>
			<a href="post.php?id=<?=$post['id']; ?>" class="section__article__nextlink">Читать далее  →</a>
        <footer class="section__article__footer">
            <ul>
                <li><i class="fas fa-eye"></i> <?=$post['view']; ?></li>
                <li><i class="fas fa-folder-open"></i> <a href="category.php?id=<?=$post['cat_id']; ?>"><?=$post['cat_title']; ?></a></li>
                <li><i class="fas fa-comments"></i> <a href="post.php?id=<?=$post['id']; ?>#comments">Комментарии: <?=$post['count']; ?></a></li>
            </ul>
        </footer>
    </article>
 <?php } ?>
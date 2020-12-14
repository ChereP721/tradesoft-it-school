<?php
foreach ($this->post as $post) { ?>
    <div class="comment" id="comment<?=$post['id'];?>">
<div class="section__comments">
    <p class="section__comments__author">
        <i class="fas fa-user-circle" aria-hidden="true"></i> <a href="/user.php?id=<?=$post['author_id']; ?>" class="section__article__author__link"> <?=$post['user_name']; ?></a> прокомментировал
        <time datetime="<?=$post['comment_date']; ?>"><?=strftime('%e %B %G',strtotime($post['comment_date'])); ?></time>
    <!-- id - <?=$post['id'];?> parent - <?=$post['parent_id'];?> -->
        <?php
            if ($_SESSION['user'] === $post['user_login']) { echo '<a href="edit.php?id='.$post['id'].'">Редактировать</a> <a href="post.php?id='.$post['post_id'].'&del='.$post['id'].'&user='.$post['user_login'].'">Удалить</a>' ;}
        ?>
    </p>
    <p class="section__comments__text">
        <?=$post['content']; ?>
    </p>
</div>
    </div>
<?php } ?>
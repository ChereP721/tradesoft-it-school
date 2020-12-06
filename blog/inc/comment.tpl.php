<?php
foreach ($this->post as $post) { ?>
    <div class="comment" id="comment<?=$post['id'];?>">
<div class="section__comments">
    <p class="section__comments__author">
        <i class="fas fa-user-circle" aria-hidden="true"></i> <a href="<?=$post['author_id']; ?>" class="section__article__author__link"> <?=$post['user_name']; ?></a> прокомментировал
        <time datetime="<?=$post['comment_date']; ?>"><?=strftime('%e %B %G',strtotime($post['comment_date'])); ?></time>
    id - <?=$post['id'];?> parent - <?=$post['parent_id'];?>
    </p>
    <p class="section__comments__text">
        <?=$post['content']; ?>
    </p>
</div>
    </div>
<?php } ?>
<?php foreach ($this->post as $post) { ?>
<div class="aside__block__content"><a href="post.php?id=<?=$post['id']; ?>"><img src="<?=$post['image']; ?>" width="300" alt="<?=$post['title']; ?>"></a></div>
<?php }?>
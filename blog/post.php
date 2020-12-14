<?php
    require_once('core'.DIRECTORY_SEPARATOR.'config.php');
?>
<!DOCTYPE html>
<html lang="<?=LANG;?>">

<?php require('inc'.DIRECTORY_SEPARATOR.'head.php'); ?>

<body>

<?php require('inc'.DIRECTORY_SEPARATOR.'header.php'); ?>

<div class="wrapper wrapper_mob">
<main class="main main_mob">
	<section class="section">
	
	<?php
		$postId = (int)$_GET['id'];
		$delCommentId = (int)$_GET['del'];
        $delCommentUser = (string)$_GET['user'];
		$postOut = new WorkDB($dbHost, $dbUser, $dbPass, $dbName);
		$postOut->postQuery($postId);
        $postOut->updateView($postId);

        if ((isset($delCommentId))&&($_SESSION['user'] === $delCommentUser)) { $postOut->deleteComment($delCommentId); }

		$postId == 0 ? $tpl = 'all_post' : $tpl = 'post';

		$out = new TplRender();
		$out->outRenderedTemplate($postOut->data, $tpl);

		if ($postId > 0) { echo '<button id="add-comment" class="addcomment">Добавить комментарий</button>';};

	?>
        <details open id="det_comments">
            <summary class="section__article__blockname"><span class="dash">Комментарии:</span></summary>
            <div id="comments" class="comments_wrap">
            <?php
              $postOut->commentOut($postId);
                $out->outRenderedTemplate($postOut->data,'comment');
            ?>
            </div>
        </details>

        <div class="modal">
            <div class="modal__container">
                <button type="button" class="modal__btn-close">
                    <i class="fa fa-close"></i>
                </button>
            </div>
        <div class="form__wrap">
		<div class="form__wrap__title">Добавить комментарий:</div>
            <form method="POST" name="comment_add" action="<?=$_SERVER['REQUEST_URI']?>" enctype="multipart/form-data">
                <div class="form__wrap__item">
                    <label for="uname">Ваше имя</label>
                    <?php
                    if (isset($_SESSION['user']))
                    {
                        echo ('<input type="text" id="uname" name="u_name" data-required value="'.$_SESSION['user'].'"><input type="hidden" name="u_id" value="'.$_SESSION['user_id'].'">');
                    } else {
                        echo ('<input type="text" id="uname" name="u_name" data-required value="Гость"><input type="hidden" name="u_id" value="3">');
                    };
                    ?>

                    <span data-msg='Введите имя'></span>
                    <div class="form__dot"></div>
                </div>
                <div class="form__wrap__item">
                    <label for="umail" data-msg='Введите корректный e-mail'>E-mail</label>
                    <input type="text" id="umail" name="u_mail" data-required >
                    <span data-msg='Введите корректный e-mail'></span>
                    <div class="form__dot"></div>
                </div>
                <div class="form__wrap__item">
                    <div class="form__dot form__dot_up"></div>
                    <label for="utext" data-msg='Введите текст комментария'>Комментарий</label>
                    <textarea name="u_txt" id="utext"  data-required ></textarea>
                    <span data-msg='Введите текст комментария'></span>
                </div>
                <div class="form__wrap__item">
                    <button class="button_send" type="button">Отправить</button>
                </div>

                <input type="hidden" name="p_id" value="<?=$postId?>">
            </form>
            <div class="loader__wrapper">
                <i class="loader__icon fa fa-spinner"></i>
            </div>
            <div class="notification">
                <p class="notification__title"></p>
                <p class="notification__text"></p>
            </div>
	</div>
    </div>


</section>
</main>

<?php require('inc'.DIRECTORY_SEPARATOR.'aside.php'); ?>

</div>

<div class="line"></div>

<?php require('inc'.DIRECTORY_SEPARATOR.'footer.php'); ?>

</body>
</html>
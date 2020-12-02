<?php
session_start();
require_once('core'.DIRECTORY_SEPARATOR.'config.php');
require_once('core'.DIRECTORY_SEPARATOR.'workdb.class.php');
require_once('core'.DIRECTORY_SEPARATOR.'tplrender.class.php');
require_once('core'.DIRECTORY_SEPARATOR.'siteauth.class.php');
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
		$postOut = new WorkDB($dbHost, $dbUser, $dbPass, $dbName);
		$postOut->postQuery($postId);
        $postOut->updateView($postId);

		$postId == 0 ? $tpl = 'all_post' : $tpl = 'post';

		$out = new TplRender();
		$out->outRenderedTemplate($postOut->data, $tpl);
	?>
		
<!--	<div class="section__commment">
		<div class="section__blockname">Комментарии:</div>					
	</div>

		
	<div class="form__wrap">
		<div class="form__wrap__title">Добавить публикацию (комментарий):</div>
	</div>
-->
</section>
</main>

<?php require('inc'.DIRECTORY_SEPARATOR.'aside.php'); ?>

</div>

<div class="line"></div>

<?php require('inc'.DIRECTORY_SEPARATOR.'footer.php'); ?>

</body>
</html>
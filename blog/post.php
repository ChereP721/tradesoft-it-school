<!DOCTYPE html>
<?php
require_once('core'.DIRECTORY_SEPARATOR.'config.php');
require_once('core'.DIRECTORY_SEPARATOR.'postworkdb.class.php');
require_once('core'.DIRECTORY_SEPARATOR.'tplrender.class.php');
?>
 
<html lang="<?=LANG;?>">

<?php require('inc'.DIRECTORY_SEPARATOR.'head.php'); ?>

<body>

<?php require('inc'.DIRECTORY_SEPARATOR.'header.php'); ?>

<div class="wrapper wrapper_mob">
<main class="main main_mob">
	<section class="section">
	
	<?php	
	
		$postId = (int)$_GET['id'];
		
		$singlePostSelect = new PostWorkDB($dbHost, $dbUser, $dbPass, $dbName);
		$singlePostSelect->postQuery($postId);
		$singlePost = $singlePostSelect->data;

		if(!(empty($singlePost))) {
			$singlePostOut = new TplRender();
			$singlePostOut->post = $singlePost;
			$singlePostOut->displayTemplate('post');
			$singlePostSelect->updateView($postId);
		} else 
			{
				echo '<h1 class="section__h1">Страницы не существует 404</h1>
					  <article class="section__article"><div class="section__article__post"><p>Вы попали не туда =)</p></div></article>';
			}
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
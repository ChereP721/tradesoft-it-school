<!DOCTYPE html>
<?php
require_once('core\config.php');
require_once('core\postworkdb.class.php');
require_once('core\tplrender.class.php');
?>
 
<html lang="<?=LANG;?>">

<?php require('inc\head.php'); ?>

<body>

<?php require('inc\header.php'); ?>

<div class="wrapper wrapper_mob">
<main class="main main_mob">
	<section class="section">
	
	<?php	
	
		$postId = (int)$_GET['id'];
		
		$singlePostSelect = new PostWorkDB($dbHost, $dbUser, $dbPass, $dbName);
		$singlePostSelect->getPost($postId);
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
		
	<div class="section__commment">
		<div class="section__blockname">Комментарии:</div>					
	</div>	
		
	<div class="form__wrap">
		<div class="form__wrap__title">Добавить публикацию (комментарий):</div>
	</div>
		
</section>
</main>

<?php require('inc\aside.php'); ?>

</div>

<div class="line"></div>

<?php require('inc\footer.php'); ?>

</body>
</html>
<!DOCTYPE html>

<?php
	require('core\core.php');
?>
 
<html lang="<?=LANG;?>">

<?php require('inc\head.php.inc'); ?>

<body>

<?php require('inc\header.php.inc'); ?>

<div class="wrapper wrapper_mob">
<main class="main main_mob">
	<section class="section">
	<h1 class="section__h1"><?=SITE_NAME;?></h1>
	<?php	
	
		$allPostSelect = new postWorkDB;
		$allPostSelect->getAllPost();

		if(!(empty($allPostSelect->data))) {
			$allPostOut = new tplRender();
			$allPostOut->set('allPost', $allPostSelect->data);
			$allPostOut->displayTemplate('all_post');
		} else 
			{
				echo '<h1 class="section__h1">Наш сайт ещё наполняется...</h1>
					  <article class="section__article"><div class="section__article__post"><p>Sorry =)</p></div></article>';
			}

	?>
</section>
</main>

<?php require('inc\aside.php.inc'); ?>

</div>

<div class="line"></div>

<?php require('inc\footer.php.inc'); ?>

</body>
</html>
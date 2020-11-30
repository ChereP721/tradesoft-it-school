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
	<h1 class="section__h1"><?=SITE_NAME;?></h1>
	<?php	
	
		$allPostSelect = new PostWorkDB($dbHost, $dbUser, $dbPass, $dbName);
		$allPostSelect->getAllPost();

		if(!(empty($allPostSelect->data))) {
			$allPostOut = new TplRender();
			$allPostOut->allPost = $allPostSelect->data;
			$allPostOut->displayTemplate('all_post');
		} else 
			{
				echo '<article class="section__article"><div class="section__article__post"><p>Наш сайт ещё наполняется...</p></div></article>';
			}

	?>
</section>
</main>

<?php require('inc\aside.php'); ?>

</div>

<div class="line"></div>

<?php require('inc\footer.php'); ?>

</body>
</html>
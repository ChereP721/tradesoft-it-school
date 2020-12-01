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
	<h1 class="section__h1"><?=SITE_NAME;?></h1>
	<?php	
	
		$allPostSelect = new PostWorkDB($dbHost, $dbUser, $dbPass, $dbName);
		$allPostSelect->postQuery();

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

<?php require('inc'.DIRECTORY_SEPARATOR.'aside.php'); ?>

</div>

<div class="line"></div>

<?php require('inc'.DIRECTORY_SEPARATOR.'footer.php'); ?>

</body>
</html>
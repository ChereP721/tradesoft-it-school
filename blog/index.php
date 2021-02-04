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
	<h1 class="section__h1"><?=SITE_NAME;?></h1>
	<?php
		$postOut = new WorkDB($dbHost, $dbUser, $dbPass, $dbName);
		$postOut->postQuery(0);

        $out = new TplRender();
        $out->outRenderedTemplate($postOut->data, 'all_post');
    ?>
</section>
</main>

<?php require('inc'.DIRECTORY_SEPARATOR.'aside.php'); ?>

</div>

<div class="line"></div>

<?php require('inc'.DIRECTORY_SEPARATOR.'footer.php'); ?>

</body>
</html>
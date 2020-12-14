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
        <h1 class="section__h1">Разделы сайта <?=SITE_NAME_MINI;?></h1>

	<?php

        $categoryId = (int)$_GET['id'];

        $categoryOut = new WorkDB($dbHost, $dbUser, $dbPass, $dbName);

        if ($categoryId === 0) {
            $tpl = 'category';
            $categoryOut->categoryQuery();
        } else {
            $tpl = 'all_post';
            $categoryOut->postQueryCat($categoryId);
        }

		$out = new TplRender();
		$out->outRenderedTemplate($categoryOut->data, $tpl);

	?>


</section>
</main>

<?php require('inc'.DIRECTORY_SEPARATOR.'aside.php'); ?>

</div>

<div class="line"></div>

<?php require('inc'.DIRECTORY_SEPARATOR.'footer.php'); ?>

</body>
</html>
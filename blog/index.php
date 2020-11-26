<!DOCTYPE html>
<?php
	define (LANG,'ru');
	define (SITENAME,'Паперкрафт, развертки, DIY, поделки из бумаги');
	
	require('core\core.php');
	
?>
 
<html lang="<?=LANG;?>">

<?php require('inc\head.php.inc'); ?>

<body>

<?php require('inc\header.php.inc'); ?>

<div class="wrapper wrapper_mob">
<main class="main main_mob">
	<section class="section">
	<h1 class="section__h1"><?=SITENAME;?></h1>
	<?php		
		$all_post_select = new postWorkDB;
		$all_post_select->getAllPost();
		$all_post = $all_post_select->data;
		
		//var_dump ($all_post);
		
		if(!(empty($all_post))) {
			while ($row = mysqli_fetch_assoc($all_post))
			{
				$post_out = new Render();
				$post_out->set('post', $row);
				$post_out->display('all_post');
			};
		} else 
			{
				echo '<h1 class="section__h1">Наш сайт ещё наполняется...</h1>
					  <article class="section__article"><div class="section__article__post"><p>Sorry =)</p></div></article>';
			};
	?>
</section>
</main>

<?php require('inc\aside.php.inc'); ?>

</div>

<div class="line"></div>

<?php require('inc\footer.php.inc'); ?>

</body>
</html>
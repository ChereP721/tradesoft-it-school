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
        <h1 class="section__h1">Редактировать комментарий</h1>
	
	<?php
    $commentOut = new WorkDB($dbHost, $dbUser, $dbPass, $dbName);
    $out = new TplRender();
    $newData = [];
    if(isset($_POST['u_name'], $_POST['u_mail'], $_POST['u_txt'])) {
        $newData = [
            'user' => htmlspecialchars($_POST['u_name']),
            'id' => htmlspecialchars($_POST['c_id']),
            'name' => htmlspecialchars($_POST['u_name']),
            'email' => htmlspecialchars($_POST['u_mail']),
            'comment' => htmlspecialchars($_POST['u_txt']),
            'userid' => htmlspecialchars($_POST['u_id']),
            'postid' => htmlspecialchars($_POST['p_id']),
            'time' => date('Y-m-d H:m:s')
        ];
    }

    if ((!empty($newData))&&($_SESSION['user'] === $newData['user'])) {
        $sql = "UPDATE bl_comment SET author_id = ".$newData['userid'].", post_id = ".$newData['postid'].", parent_id = 0, content = '".$newData['comment']."', comment_date = '".$newData['time']."' WHERE id = ".(int)$newData['id'];
        $commentOut->doQuery($sql);
        echo '<p>Спасибо, Ваш комментарий успешно изменен.</p>';
    } else {
        $commentId = (int)$_GET['id'];
        $commentOut->oneCommentOut($commentId);
        $out->outRenderedTemplate($commentOut->data, 'form');
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
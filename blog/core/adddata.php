<?php

$newData = [];
if(isset($_POST['u_name'], $_POST['u_mail'], $_POST['u_txt'])) {
    $newData = [
        'name' => htmlspecialchars($_POST['u_name']),
        'email' => htmlspecialchars($_POST['u_mail']),
        'comment' => htmlspecialchars($_POST['u_txt']),
        'userid' => htmlspecialchars($_POST['u_id']),
        'postid' => htmlspecialchars($_POST['p_id']),
        'time' => date('Y-m-d H:m:s')
    ];
}

if (!empty($newData)) {
    require_once('config.php');
    require_once('workdb.class.php');
    $addComment = new WorkDB($dbHost, $dbUser, $dbPass, $dbName);
    $sql = "INSERT INTO bl_comment (author_id, post_id, parent_id, content, comment_date) VALUES (".$newData['userid'].", ".$newData['postid'].", 0, '".$newData['comment']."', '".$newData['time']."')";
    $addComment->doQuery($sql);
    sleep(2);
    echo json_encode($newData);
}



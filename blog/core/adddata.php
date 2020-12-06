<?php

$newData = [];

if(isset($_POST['u_name'], $_POST['u_mail'], $_POST['u_txt'])) {
    $newData = [
        'name' => $_POST['u_name'],
        'email' => $_POST['u_mail'],
        'comment' => $_POST['u_txt'],
        'time' => date("F j, Y, g:i a")
    ];
};

sleep(3);
echo json_encode($newData);

<?php
if(isset($_POST['exitAuth']))
    {
    unset($_COOKIE['user_id']);
    unset($_COOKIE['userLogin']);
    setcookie('user_id', '', time() -1, '/');
    setcookie('userLogin', '', time() -1, '/');
    $home_url = 'http://' . $_SERVER['HTTP_HOST']. '/tradesoft-it-school/';
    header('Location: ' . $home_url);
    }
?>
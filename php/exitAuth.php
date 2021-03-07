<?php
if(isset($_POST['exitAuth']))
    {
    unset($_COOKIE['user_id']);
    unset($_COOKIE['userLogin']);
    setcookie('user_id');
    setcookie('userLogin'); 
    header('Location: /tradesoft-it-school/');
    exit;
    }
?>
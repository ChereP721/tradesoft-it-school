<?php
$pass = $_POST['pass'];
$user_name = $_POST['user'];
echo $pass;
echo $user_name;
if (isset($_POST['pass']) && trim($_POST['pass']) !== '') {
    $user_name = trim($_POST['pass']);
    echo $user_name;
    echo $pass;
}

?>

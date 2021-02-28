<?php
unset($_COOKIE['user_id']);
unset($_COOKIE['userLogin']);
setcookie('user_id', '', -1, '/');
setcookie('userLogin', '', -1, '/');
header('Location: ../');
?>
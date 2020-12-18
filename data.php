<?php

session_start();

include 'func.php';

$usersList = include 'users.php';
if (isset($_POST['form-name']) && $_POST['form-name'] === 'form-auth') {
    if (isset($_POST['reup'])) {
        if(empty($_COOKIE['user'])) {
            echo 'Предыдущей сессии не существует!';
        }else {
            $_SESSION['user'] = $_COOKIE['user'];
        }
    }
    if (isset($_POST['logout'])) {
        unset($_SESSION['user']);
    } elseif (isset($_POST['login'])) {
        if (!isset($usersList[$_POST['login']])) {
            echo '
                <div id="message">
                    <button type="button" class="modal__btn-close">
                        <i class="fa fa-close"></i>
                    </button>
                    <p>Неверный логин!</p>
                </div>
            ';
            unset($_SESSION['user']);
        } elseif ($usersList[$_POST['login']]['password'] !== $_POST['password']) {
            echo '
                <div id="message">
                    <button type="button" class="modal__btn-close">
                        <i class="fa fa-close"></i>
                    </button>
                    <p>Неверный пароль!</p>
                </div>
            ';
            unset($_SESSION['user']);
        } else {
            $_SESSION['user'] = $_POST['login'];
            setcookie('user', $_POST['login']);
        }
    }
}

define('COPYRIGHT', 'My First Blog &#169; 2020'); /* const */
define('SECONDS_IN_DAY', 24 * 3600);
define('SECONDS_IN_YEAR', SECONDS_IN_DAY * 365);
define('MAX_LEVEL', 0);

if(isset($_POST['name'], $_POST['email'], $_POST['comment'])) {
    $newData = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'comment' => $_POST['comment'],
        'time' => date("F j, Y, g:i a")
    ];    
} else {
    $newData = null;
}


$documentTitle = 'First Project'; //string
$viewsCount = 100 + rand(10, 50); //int
$canMakeReview = true; //bool

$author = 'Admin';
$you = 'Admin';

$post = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$post2 = $post;
$post2 .= 'Sed blandit massa vel mauris sollicitudin dignissim. Phasellus ultrices tellus eget ipsum ornare molestie scelerisque eros dignissim.';


$authorArr = [
    'Admin',
    'Hater',

];

$commentAr = [];

$commentCount = rand(4, 7);
$commentAr = generateComments($commentCount);


if ($newData != null) {
    echo json_encode($newData);
}


<?php


class SiteAuth
{

/*
 * Вывод формы авторизации
 *
 * @param $signInForm - название шаблона формы для авторизации
 * @param $signOutForm - название шаблона формы для выхода
 *
 * Пример вызова:
 * $auth = new SiteAuth();
 * $auth->checkAuth();
 * $auth->formDisplay();
 *
 * */

    public function formDisplay(string $signInForm = 'authform', string $signOutForm = 'authoutform'):void
    {
        if (isset($_SESSION['user']))
        {
            require_once('inc'.DIRECTORY_SEPARATOR.$signOutForm.'.tpl');
        }else {
            require_once('inc'.DIRECTORY_SEPARATOR.$signInForm.'.tpl');
        }
    }

/*
 *
 * Вывод сообщения результата попытки авторизации
 *
 * @param $meassageTpl - название шаблона вывода сообщения
 *
 * *
 * */

    public function checkAuth(string $meassageTpl = 'authmessage'):void
    {
        if (isset($_POST['f_send']))
        {
            require('config.php');
            $checkU = new WorkDB($dbHost, $dbUser, $dbPass, $dbName);

            switch ($checkU->checkUser($_POST['f_login'], $_POST['f_passw']))
            {
                case 0:
                    $auth_message = 'Указанный пользователь не зарегистрирован';
                    break;
                case 1:
                    $auth_message = 'Пароль не верный';
                    break;
                case 2:
                    $_SESSION['user'] = $_POST['f_login'];
                    break;
            }
        };

       if (isset($_POST['f_out_send']))
        {
            unset($_SESSION['user']);
        };

        if (isset($_SESSION['user']))
        {
            $auth_message = 'Добро пожаловать, '.$_SESSION['user'];
            require_once('inc'.DIRECTORY_SEPARATOR.$meassageTpl.'.tpl');
        } else require_once('inc'.DIRECTORY_SEPARATOR.$meassageTpl.'.tpl');
    }
}
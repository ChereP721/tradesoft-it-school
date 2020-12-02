<?php

require_once('formatexception.class.php');

class WorkDb {

    private $connect, $host, $user, $pass, $name;

    private const DB_ERROR = 'Извините, что-то пошло не так...';
    private const DB_ERROR1 ='Наш сайт еще наполняется.';
    private const DB_ERROR3 ='Не хулиганьте!';

    public $data = array();

    public function __construct($dbHost, $dbUser, $dbPass, $dbName)
    {
        $this->host = $dbHost;
        $this->user = $dbUser;
        $this->pass = $dbPass;
        $this->name = $dbName;

        try {
            $this->connect = new mysqli($this->host, $this->user, $this->pass, $this->name);
           if ($this->connect->connect_error) {
               throw new FormatException(self::DB_ERROR) ;
            }
        }
        catch (FormatException $e) {
            echo $e->errorMessage();
        }
    }

    public function updateView(int $postId):void
    {
        $sql = 'UPDATE bl_post SET view = view + 1 WHERE id = '.$postId;

        if (!$result = $this->connect->query($sql)) {
            echo self::DB_ERROR;
            return;
        }
    }

    public function postQuery(int $postId = 0)
    {
        $where = '';
        $resultPostArr = [];
        if (!$postId == 0) $where = 'WHERE p.id = '.$postId;

        $sql = 'SELECT p.*, c.title AS cat_title, c.id AS cat_id, u.name AS user_name, u.id AS user_id FROM bl_post p
                    LEFT JOIN bl_pages c ON p.cat_id = c.id
                    LEFT JOIN bl_users u ON p.author_id = u.id '.$where;

        try {
            $postObj = $this->connect->query($sql);
            if ($this->connect->connect_error) {
                throw new FormatException(self::DB_ERROR1);
            }
            $resultPostArr = $postObj->fetch_all(MYSQLI_ASSOC);
        }
        catch (FormatException $e) {
            echo $e->errorMessage();
        }

        return  $this->data = $resultPostArr;
    }

/*
 * Проверка существования пользователя
 * 0 - Пользователя не существует
 * 1 - Пароль не верный
 * 2 - Success!
 * */

    public function checkUser(string $login, string $passw):int
    {
        $sql = 'SELECT * FROM bl_users WHERE login = \''.$login.'\'';

        try {
            $userObj = $this->connect->query($sql);
            if ($this->connect->connect_error) {
                throw new FormatException(self::DB_ERROR2);
            }
            $userArr = $userObj->fetch_array();
        }
        catch (FormatException $e) {
            echo $e->errorMessage();
        };

        if (empty($userArr))  return 0;
        if ($userArr['passw'] === $passw) {
            return 2;
        } else return 1;
    }
}
<?php

class WorkDb {

    public $connect, $host, $user, $pass, $name;

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

    public function doQuery (string $sql):void
    {
        $this->connect->query($sql);
    }

    public function updateView(int $postId):void
    {
        $sql = 'UPDATE bl_post SET view = view + 1 WHERE id = '.$postId;

        if (!$result = $this->connect->query($sql)) {
            echo self::DB_ERROR;
            return;
        }
    }

    public function getQueryResult(string $sql):array
    {
        $resultArr = [];
        try {
            $resultObj = $this->connect->query($sql);
            if ($this->connect->connect_error) {
                throw new FormatException(self::DB_ERROR1);
            }
            $resultArr = $resultObj->fetch_all(MYSQLI_ASSOC);
        }
        catch (FormatException $e) {
            echo $e->errorMessage();
        }

        return $resultArr;
    }

    public function postQuery(int $postId = 0):array
    {
        $where = '';
        if (!$postId == 0) $where = 'WHERE p.id = '.$postId;

        $sql = '
            SELECT
                p.*, c.title AS cat_title, c.id AS cat_id, u.name AS user_name, u.id AS user_id, COUNT(bc.id) AS count
            FROM bl_post p
            LEFT JOIN bl_pages c ON p.cat_id = c.id
            LEFT JOIN bl_users u ON p.author_id = u.id
            LEFT JOIN bl_comment bc ON bc.post_id = p.id
            '.$where.'
            GROUP BY p.id
        ';

        return $this->data = $this->getQueryResult($sql);
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

        $userArr = $this->getQueryResult($sql);

        if (empty($userArr))  return 0;
        if ($userArr[0]['passw'] === $passw) {
            return 2;
        } else return 1;
    }

    public function getUserId(string $login):int
    {
        $sql = 'SELECT id FROM bl_users WHERE login = \''.$login.'\'';

        $userArr = $this->getQueryResult($sql);

        if (empty($userArr))  return 0;
        return $userArr[0]['id'];
    }

    public function commentOut(int $postId = 0):array
    {
        if ($postId == 0) return $this->data = [];

        $where = 'WHERE post_id = '.$postId;
        $sql = 'SELECT c.*, u.name AS user_name, u.login AS user_login FROM bl_comment c 
                LEFT JOIN bl_users u ON u.id = c.author_id '.$where;

       return  $this->data = $this->getQueryResult($sql);
    }

    public function oneCommentOut(int $comentId = 0):array
    {
        if ($comentId == 0) return $this->data = [];

        $sql = 'SELECT * FROM bl_comment WHERE id = '.$comentId;

        return  $this->data = $this->getQueryResult($sql);
    }

    public function categoryQuery():array
    {
        $sql = 'SELECT * FROM bl_pages WHERE flag_cat = 1';
        return  $this->data = $this->getQueryResult($sql);
    }

    public function postQueryCat(int $catId):array
    {
        $where = 'WHERE p.cat_id = '.$catId;

        $sql = '
            SELECT
                p.*, c.title AS cat_title, c.id AS cat_id, u.name AS user_name, u.id AS user_id, COUNT(bc.id) AS count
            FROM bl_post p
            LEFT JOIN bl_pages c ON p.cat_id = c.id
            LEFT JOIN bl_users u ON p.author_id = u.id
            LEFT JOIN bl_comment bc ON bc.post_id = p.id
            '.$where.'
            GROUP BY p.id
        ';

        return  $this->data = $this->getQueryResult($sql);
    }

    public function deleteComment(int $commentId):void
    {
        $sql = 'DELETE FROM bl_comment WHERE id='.$commentId;
        $this->doQuery($sql);
    }
}
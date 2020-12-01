<?php

class FormatException extends Exception {

    public function errorMessage()
    {
        $errorMsg = '<article class="section__article"><div class="section__article__post"><p>'.$this->getMessage().'</p></div></article>';
        return $errorMsg;
    }
}

class PostWorkDb {

    private $connect, $host, $user, $pass, $name;
    private const DB_ERROR = 'Извините, что-то пошло не так...';

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
               throw new FormatException(self::DB_ERROR);
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
        if (!$postId == 0) $where = 'WHERE p.id = '.$postId;

        $sql = 'SELECT p.*, c.title AS cat_title, c.id AS cat_id, u.name AS user_name, u.id AS user_id FROM bl_post p
                    LEFT JOIN bl_pages c ON p.cat_id = c.id
                    LEFT JOIN bl_users u ON p.author_id = u.id '.$where;

        try {
            $postArr = $this->connect->query($sql);
            if ($this->connect->connect_error) {
                throw new FormatException(self::DB_ERROR);
            }
        }
        catch (FormatException $e) {
            echo $e->errorMessage();
        }


        $resultPostArr = $postArr->fetch_all(MYSQLI_ASSOC);
        return  $this->data = $resultPostArr;
    }
}
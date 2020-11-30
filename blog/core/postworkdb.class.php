<?php

class FormatException extends Exception {

    public function errorMessage() {
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
            $this->connect = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
            if ($this->connect->connect_error) {
               throw new FormatException(self::DB_ERROR);
            }
        }
        catch (FormatException $e) {
            echo $e->errorMessage();
        }
    }

    public function getCategory(int $postId)
    {
        $sql = 'SELECT title AS cat_title FROM bl_pages WHERE id = (SELECT cat_id FROM bl_post WHERE id = '.$postId.')';

        if (!$postCategoryArr = $this->connect->query($sql)) {
            echo self::DB_ERROR;
            return;
        }
        return $postCategoryArr->fetch_assoc();
    }

    public function getPost(int $postId)
    {
        $sql = 'SELECT * FROM bl_post WHERE id = '.$postId;

        if (!$postArr = $this->connect->query($sql)) {
            echo self::DB_ERROR;
            return;
        }

        $resultPostArr = $postArr->fetch_assoc();
        $categoryArr = $this->getCategory($postId);
        $resultPostArr = $resultPostArr + $categoryArr;
        return  $this->data = $resultPostArr;
    }

    public function updateView(int $postId):void
    {
        $sql = 'UPDATE bl_post SET view = view + 1 WHERE id = '.$postId;

        if (!$result = $this->connect->query($sql)) {
            echo self::DB_ERROR;
            return;
        }
    }

    public function getAllPost()
    {
        $sql = 'SELECT * FROM bl_post';

        if (!$allPostArr = $this->connect->query($sql)) {
            echo self::DB_ERROR;
            return;
        }

        return  $this->data = $allPostArr->fetch_all(MYSQLI_ASSOC);
    }
}
<?php

namespace MyProject\controller;

use MyProject\Models\Articles\Article;
//use MyProject\Services\Db;
use MyProject\View\View;

class MainController
{
    /** @var View */
    private $view;

//    /** @var Db */
//    private $db;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
//        $this->db = new Db();
    }

    public function main()
    {
        $articles = Article::findAll();
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }
}

?>
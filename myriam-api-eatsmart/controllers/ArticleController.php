<?php

require_once "models/ArticleModel.php";

class ArticleController
{
    private $model;

    public function __construct()
    {
        $this->model = new ArticleModel();
    }

    public function getAllArticle()
    {
        $article = $this->model->getDBAllArticle();
        echo json_encode($article);
    }
}
//$articleController = new ArticleController();
//$articleController->getAllArticle();
?>
<?php

require_once "models/CategorieModel.php";
class CategorieController
{
    private $model;

    public function __construct()
    {
        $this->model = new CategorieModel();
    }

    public function getAllCategorie()
    {
        $categorie = $this->model->getDBAllCategorie();
        echo json_encode($categorie);
    }
}
//$categorieController = new CategorieController();
//$categorieController->getAllCategorie();
?>
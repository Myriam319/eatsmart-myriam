<?php

require_once "models/CommandeModel.php";
class CommandeController
{
    private $model;

    public function __construct()
    {
        $this->model = new CommandeModel();
    }

    public function getAllCommande()
    {
        $commande = $this->model->getDBAllCommande();
        echo json_encode($commande);
    }
}
//$categorieController = new CategorieController();
//$categorieController->getAllCategorie();
?>
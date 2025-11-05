<?php
require_once "models/CommandeModel.php"; // Assure-toi que le chemin est correct

class CommandeController
{
    private $model;

    public function __construct()
    {
        $this->model = new CommandeModel();
    }

    public function getAllCommandes()
    {
        $commandes = $this->model->getDBAllCommandes();
        echo json_encode($commandes);
    }

    public function getCommandeByID($id)
    {
        $commande = $this->model->getDBCommandesByID($id);
        echo json_encode($commande);
    }

    public function getArticlesByCommandeID($id)
    {
        $articles = $this->model->getArticlesByCommandeID($id);
        echo json_encode($articles);
    }

    public function createCommande($data)
    {
        $commande = $this->model->createDBCommande($data);
        http_response_code(201);
        echo json_encode($commande);
    }

    public function addArticleToCommande($idCommande, $idArticle, $quantite)
    {
        $this->model->createAssocArticleCommande($idCommande, $idArticle, $quantite);
        http_response_code(201);
        echo json_encode(["message" => "Article ajouté à la commande"]);
    }
    
}
?>
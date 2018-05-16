<?php
require_once "../../models/Categories.php";
class CategrieController {
      public function __construct()
    {

    }

    public function ajouterCategorie($libelle){
        $bd=Connexion();
        $bd->getConnexion();
        $cm=new Categories($libelle,$bd);
        $cm->ajouterCategorie();
       

    }
}

<?php

include_once'../../models/Connexion.php';
class Categories {
    private $libelle;
    private $bd ;
 function __construct( $libelle)
    {
        $this->libelle = $libelle;
       
    }


    public function getLibelle()
    {
        return $this->libelle;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
     public function ajouterCategorie(){
        
        $this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();
        $sql="insert into categorie (lib_cat) values ('$this->libelle')";
       if( $this->bd->exec($sql))
        return true;
       else
           return false;
    }
    public function getCategoryByLib(){
        $this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();
      $sql="SELECT  id_cat  FROM categorie WHERE lib_cat='$this->libelle'";
  
        $res=$this->bd->exec($sql);
        return $res;
    }
}
<?php

include_once'../../models/Connexion.php';
class Categories {
    private $libelle;
    private $bd ;
 function __construct($libelle)
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
       if( $this->bd->query($sql))
        return true;
       else
           return false;
    }
    public function getCategoryByLib(){
      $this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();

  $sql="SELECT  id_cat  FROM categorie WHERE lib_cat='$this->libelle'";

 $result = mysqli_query( $this->bd,$sql) or die(mysql_error());
$row = mysqli_fetch_assoc($result);
  
        return $row;
    }
      
    public function getCategories(){
      $this->bd=new Connexion();
      $this->bd=$this->bd->getConnexion();

      $sql="SELECT * FROM categorie";

      $result = mysqli_query( $this->bd,$sql) or die(mysql_error());
  if(mysqli_num_rows($result)>0)
        return $result;
  else 
      return NULL;
  
    }
}
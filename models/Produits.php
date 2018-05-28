<?php
include_once'../../models/Connexion.php';
include_once'Categories.php';
class Produits {
    private $idP;
    private $libelleP;
    private $prixP;
    private $stockP;
    private $dispo;
    private $descriptionP;
    private $idCat;
    private $bd;
    private $image;
    function __construct($lib,$prix,$stock,$desc,$cat,$image){ 
      
          $this->libelleP=$lib;
          $this->prixP=$prix;
          $this->stockP=$stock;
          $this->dispo=1;
          $this->descriptionP=$desc;
          $this->idCat=$cat;
          $this->image=$image;
      
          
    }
    function getIdP() {
        return $this->idP;
    }

    function getLibelleP() {
        return $this->libelleP;
    }

    function getPrixP() {
        return $this->prixP;
    }

    function getStockP() {
        return $this->stockP;
    }

    function getDispo() {
        return $this->dispo;
    }

    function getDescriptionP() {
        return $this->descriptionP;
    }

    function getIdCat() {
        return $this->idCat;
    }

    function setIdP($idP) {
        $this->idP = $idP;
    }

    function setLibelleP($libelleP) {
        $this->libelleP = $libelleP;
    }

    function setPrixP($prixP) {
        $this->prixP = $prixP;
    }

    function setStockP($stockP) {
        $this->stockP = $stockP;
    }

    function setDispo($dispo) {
        $this->dispo = $dispo;
    }

    function setDescriptionP($descriptionP) {
        $this->descriptionP = $descriptionP;
    }

    function setIdCat($idCat) {
        $this->idCat = $idCat;
    }
    public function ajouterProduit(){

        $this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();
        if ($this->stockP>10)
            $this->dispo=1;
        else
            $this->dispo=0;
       $sql = "INSERT INTO produit (libelle_produit,prix_produit,stock_produit,dispo,description_produit,id_cat,image) VALUES ('$this->libelleP','$this->prixP','$this->stockP','$this->dispo','$this->descriptionP','$this->idCat','$this->image')";
      
       if ($this->bd->query($sql)) 

        return true;
       else
           return false;
    }
    public function getAllProduits(){
          $this->bd=new Connexion();
      $this->bd=$this->bd->getConnexion();

      $sql="SELECT * FROM produit";

      $result = mysqli_query( $this->bd,$sql) or die(mysql_error());
  if(mysqli_num_rows($result)>0)
        return $result;
  else 
      return NULL;
  
    
    }
      
    public function getProduitsById($id){
       
         $this->bd=new Connexion();
      $this->bd=$this->bd->getConnexion();

      $sql="SELECT * FROM produit where id_produit='$id'";
     

      $result = mysqli_query( $this->bd,$sql) or die(mysql_error());
      $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0)
        return $row;
  else 
      return NULL;
    }
    public function getProduitByStock(){
        $sql="SELECT * FROM produit WHERE  stock_produit < 10";
         $res=$this->bd->query($sql);
        return $res;
    }
    public function getProduittByCategory($cat){
        $stmt = $this->bd->prepare("SELECT * FROM `produit` WHERE id_produit =(SELECT id_produit from categorie where lib_cat = :cat");
        $stmt->bindValue('cat' ,$cat);
        $res=$stmt->execute();
        return $res;
    }
    public function ModifierProduit($id)
    {
            $this->bd=new Connexion();
      $this->bd=$this->bd->getConnexion();
      $this->setIdP($id); 
  
   
        $sql="UPDATE `produit` SET  `libelle_produit`='$this->libelleP',`prix_produit`=$this->prixP,`stock_produit`=$this->stockP,`description_produit`=' $this->descriptionP',image='$this->image'  WHERE `id_produit`=$this->idP";

  
        if ($this->bd->query($sql))
            return true;
        else 
            return false;

            
    }
    public function SupprimerProduit($id){
          $this->bd=new Connexion();
      $this->bd=$this->bd->getConnexion();
        $sql="DELETE FROM `produit` WHERE `id_produit` =$id";
        echo $sql;
      if ($this->bd->query($sql))
            return true;
        else 
            return false;

    }
}

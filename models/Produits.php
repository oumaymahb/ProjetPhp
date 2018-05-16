<?php
include_once'../../models/Connexion.php';
class Produits {
    private $idP;
    private $libelleP;
    private $prixP;
    private $stockP;
    private $dispo;
    private $descriptionP;
    private $idCat;
    private $bd;
    function __construct($lib,$prix,$stock,$desc,$cat){ 
         $this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();
       $sql = "SELECT id_cat From categorie where lib_cat='$cat'";
       $result = $this->bd->query($sql);
       $row = $result->fetch_assoc();
       $id= $row['id_cat'];
      echo "<script>alert('from model')</script>";
       echo "<script>alert('$id')</script>";
     
          $this->libelleP=$lib;
          $this->prixP=$prix;
          $this->stockP=$stock;
          $this->dispo=1;
          $this->descriptionP=$desc;
          $this->idCat=$id;
      
          
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
       $sql = "INSERT INTO `produit` (`libelle_produit`,`prix_produit`,`stock_produit`,`dispo`,`description_produit`,`id_cat) VALUES ('$this->libelleP','$this->prixP','$this->stockP','$this->dispo','$this->descriptionP','$this->idCat')";
       if( $this->bd->exec($sql))
        return true;
       else
           return false;
    }
    public function getAllProduits(){
        $sql="SELECT * FROM `produit`";
        $res=$this->bd->query($sql);
        return $res;
    }
    public function getProduitByLib($lib){
       
        $stmt = $this->bd->prepare("SELECT * FROM produit WHERE  libelle_produit = :lib");
        $stmt->bindValue('lib' ,$lib);
        $res=$stmt->execute();
        return $res;
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
    public function ModifierProduit()
    {
        $sql="UPDATE `produit` SET `libelle_produit`=:lib,`prix_produit`=:prix,`stock_produit`=:stock,`description_produit`=:descr  WHERE `id_produit`= :id";
        $q = $this->bd->prepare($sql);
        $q->bindValue(':id',$this->idP);
        $q->bindValue(':lib', $this->libelleP);
        $q->bindValue(':prix', $this->prixP);
        $q->bindValue(':stock', $this->stockP);
        $q->bindValue(':descr', $this->descriptionP);
        $q->execute();        
    }
    public function SupprimerProduit(){
        $sql="DELETE FROM `produit` WHERE `id_produit` = :id";
        $q = $this->bd->prepare($sql);
        $q->bindValue(':id',$this->idP);
        $q->execute();
    }
}

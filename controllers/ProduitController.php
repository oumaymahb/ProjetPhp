<?php
include_once'../../models/Produits.php';
class ProduitController {
     public function __construct()
    {

    }

    public function ajouterProduit($lib,$prix,$stock,$des,$cat,$path){
        $p=new Produits($lib,$prix,$stock,$des,$cat,$path);
       
       if( $p->ajouterProduit())
           return true;
       else
           return false;
    }
      public function updateProduit($id,$lib,$prix,$stock,$des,$cat,$path){
        $p=new Produits($lib,$prix,$stock,$des,$cat,$path);
   
       if( $p->ModifierProduit($id))
           return true;
       else
           return false;
    }
         public function deleteProduit($id)
    {
        $p=new Produits('',0,0,'',40,'');
   
       if( $p->SupprimerProduit($id))
           return true;
       else
           return false;
    }
        public function deleteProduits($ch)
    {
        $p=new Produits('',0,0,'',40,'');
   
       if( $p->SupprimerProduits($ch))
           return true;
       else
           return false;
    }
     public function getAllProduit(){
           $p=new Produits('',0,0,'',40,'');
           return $p->getAllProduits();
      
    }
       public function getProduitById($id){
           $p=new Produits('',0,0,'',40,'');
                
           $pr=$p->getProduitsById($id);
             return $pr;
      
    }
   
}

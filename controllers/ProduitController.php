<?php
include_once'../../models/Produits.php';
class ProduitController {
     public function __construct()
    {

    }

    public function ajouterProduit($lib,$prix,$stock,$des,$cat){
        $p=new Produits($lib,$prix,$stock,$des,$cat);
       
       if( $p->ajouterProduit())
           return TRUE;
       else
           return FALSE;
       
       

    }
}

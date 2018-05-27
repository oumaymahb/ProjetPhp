<?php

include_once'../../models/Images.php';
class ImageController {
   public function __construct()
    {

    }
    public function ajouterImage($filename,$tmpname){
        $i=new Images();
       
       if( $i->ajouterProduit($filename,$tmpname))
           return TRUE;
       else
           return FALSE;
       
       

    }
}

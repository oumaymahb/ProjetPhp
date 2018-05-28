<?php

include_once'../../models/Images.php';
class ImageController {
   public function __construct()
    {

    }
    public function ajouterImage($idp,$src){
        $i=new Images();
       
       if( $i->ajoutImages($idp,$src))
           return TRUE;
       else
           return FALSE;
       
       

    }
}

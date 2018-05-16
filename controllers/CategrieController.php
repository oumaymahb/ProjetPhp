<?php
include_once'../../models/Categories.php';

class CategrieController {
      public function __construct()
    {

    }

    public function ajouterCategorie($libelle){
        $cm=new Categories($libelle);
       if( $cm->ajouterCategorie())
           return TRUE;
       else
           return FALSE;
       
       

    }
}

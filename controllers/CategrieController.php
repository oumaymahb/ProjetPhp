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
      public function getCategorieById($id){
           $p=new Categories('');
                
           $pr=$p->getCategoriesById($id);
             return $pr;
      
    }
     public function getAllCategorie(){
           $cm=new Categories('');
           return $cm->getCategories();
      
    }
       public function deleteCategory($id){
        $p=new Categories('');
   
       if( $p->SupprimerCategory($id))
           return true;
       else
           return false;
    }
     public function updateCategory($id,$lib){
        $p=new Categories($lib);
   
       if( $p->ModifierCategorie($id))
           return true;
       else
           return false;
    }
}

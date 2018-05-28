<?php
include_once'../../models/Connexion.php';
class Images {
       private $id;
       private $idp;
       private $src ;
        function __construct()
    {
       
    }
    function ajoutImages($idp,$src)
    {
        $this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();
        
           
             $sql = "INSERT INTO imagesp (id_produit,src) VALUES (1,'aaa')";
       if ($this->bd->query($sql)) 

        return true;
       else
           return false;
            
        
    }
}

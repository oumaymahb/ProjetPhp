<?php
include_once'../../models/Connexion.php';
class Images {
       private $id;
       private $idp;
       private $src ;
        function __construct()
    {
       
    }
    function ajoutImages($filename,$tmpname)
    {
        $this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();
        for($i=0;$i<=count($img)-1;$i++)
        {
            $src=addslashes($filename[$i]);
            $tmp=addslashes(file_get_contents($tmpname[$i]));
             $sql = "INSERT INTO imagesp (id_produit,src,image) VALUES (1,'$src','$tmp')";
       if ($this->bd->query($sql)) 

        return true;
       else
           return false;
            
        }
    }
}

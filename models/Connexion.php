<?php

/**
 * Description of Connexion
 *
 * @author oumayma
 */
class Connexion {
    private static $bd;
        public function __construct(){
       
         }
       public function getConnexion(){
       
            $bd=mysqli_connect("localhost","root","","produits") or die("Not connected.");
      
        return $bd;
    }
}

<?php

include_once'../../models/Connexion.php';
class RateMe {
    private  $rate;
        public function __construct($rate){
       	$this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();
        $this->rate=$rate;
         }
         public function addRate(){
         	$sql="INSERT INTO `avis`(`rate`) VALUES ($this->rate)";
         	$res=mysqli_query($this->bd,$sql) or die(mysql_error());
  	return $res;
         }
     }
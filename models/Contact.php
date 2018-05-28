<?php

include_once'../../models/Connexion.php';
class Contact {
  private $idc;
  private $sujet;
  private $email;
  private $msg;
    function __construct($idc,$suj,$email,$msg){
        $this->idc=$idc;
        $this->sujet=$suj;
        $this->email=$email;
        $this->msg=$msg;    
    }
    function getIdc() {
        return $this->idc;
    }

    function getSujet() {
        return $this->sujet;
    }

    function getEmail() {
        return $this->email;
    }

    function getMsg() {
        return $this->msg;
    }

    function setIdc($idc) {
        $this->idc = $idc;
    }

    function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMsg($msg) {
        $this->msg = $msg;
    }

    public function getAllContacts(){
        $this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();
        $sql="SELECT * FROM contact";
        $result = mysqli_query( $this->bd,$sql) or die(mysql_error());
             if(mysqli_num_rows($result)>0)
                   return $result;
             else 
                    return NULL;
  
    
    }
       public function getContactById($id){
       
         $this->bd=new Connexion();
      $this->bd=$this->bd->getConnexion();

      $sql="SELECT * FROM contact where id_contact='$id'";
     

      $result = mysqli_query( $this->bd,$sql) or die(mysql_error());
      $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0)
        return $row;
  else 
      return NULL;
    }
}

<?php
include_once'../../models/User.php';
class UserController {
      private $username;
      private $pwd;
  private $nom_user;
  private $prenom_user ;
  private $adresse ;
  private $num_tel ;
      public function __construct($nom,$pre,$adr,$phone,$user,$pwd)
	  {
	  	$this->username=$user;
	  	$this->pwd=$pwd;
	  	 if(!empty($nom) && !empty($pre) && !empty($adr) && !empty($phone)){

          $this->nom_user=$nom;
          $this->prenom_user=$pre;
          $this->adresse=$adr;
          $this->num_tel=$phone;
        }
	  }
	  

	  public function verifUser()
	  {
	  	$user=new User('','','','',$this->username,$this->pwd);
	  	$res=$user->Verifuser();
	  
	  	if($res==1)
	  		return 1;
	  	elseif ($res==2)
	  			return 2;
	  	elseif($res==3)
	  			return 3;
	  	else
	  		return 0;

	  	}
	  public function AddUser(){

	  $user=new User($this->nom_user,$this->prenom_user, $this->adresse,  $this->num_tel,$this->username,$this->pwd);
	  	return ($user->AjouterUser());
	  }
}

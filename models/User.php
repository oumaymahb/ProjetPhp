<?php

/* JUUUST TESTIIIING
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author oumayma
 */

include_once'../../models/Connexion.php';
class User {
   private $id_user ;
  private $nom_user;
  private $prenom_user ;
  private $email ;
  private $mdp ;
  private $adresse ;
  private $num_tel ;
  private $role;
  private $bd;
  function __construct($nom,$pre,$adr,$phone,$user,$pwd){
        $this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();
        $this->email=$user;
        $this->mdp=$pwd;
        $this->role="visiteur";
        if(!empty($nom) && !empty($pre) && !empty($adr) && !empty($phone)){

          $this->nom_user=$nom;
          $this->prenom_user=$pre;
          $this->adresse=$adr;
          $this->num_tel=$phone;
        }
  }
  public function getId(){
  	return $this->id_user;
  }
  public function getNom(){
  	return $this->nom_user;
  }
  public function getPrenom(){
  	return $this->prenom_user;
  }
  public function getEmail(){
  	return $this->email;
  }
  public function getMdp(){
  	return $this->mdp;
  }
  public function getAdresse(){
  	return $this->adresse;
  }
  public function getNumTel(){
  	return $this->num_tel;
  }
  public function getRole(){
  	return $this->role;
  }
   public function setId($id){
  	$this->id_user=$id;
  }
  public function setNom($nom){
  	$this->nom_user=$nom;
  }
  public function setPrenom($pre){
  $this->prenom_user=$pre;
  }
  public function setEmail($email){
  	$this->email=$email;
  }
  public function setMdp($mdp){
  	$this->mdp=$mdp; 
  }
  public function setAdresse($adr){
  	$this->adresse=$adr;
  }
  public function setNumTel($num){
  	$this->num_tel=$num;
  }
  public function setRole($role){
   $this->role=$role;
  }
  public function AjouterUser()
  {
       $sql = "INSERT INTO `user` (`nom_user`, `prenom_user`,`email`,`mdp`,`adresse`,`num_tel`,`role`) VALUES ('$this->nom_user','$this->prenom_user','$this->email',' $this->mdp','$this->adresse',$this->num_tel,'$this->role')";
      $res=mysqli_query($this->bd,$sql) or die(mysql_error());
      return($res);

       
  }
     public function Verifuser(){
      $sql="SELECT * FROM `user` WHERE `email`='$this->email'";
       $res = mysqli_query($this->bd,$sql) or die(mysql_error());
        $donnees = mysqli_fetch_assoc($res);
       if(mysqli_num_rows($res)>0)
       {
       	if($donnees['mdp']===$this->mdp)
       	    if($donnees['role']=='admin')
              return 1;
            else
              return 2;
       	else
       		return 3;
       }
       else
       {
       	 return 0 ;
       }
       
  }
  public function SupprimerUser($id)
  {
        $this->bd=new Connexion();
        $this->bd=$this->bd->getConnexion();  
        $sql="DELETE FROM `user` WHERE `id_user` = :id";
        $q = $this->bd->prepare($sql);
        $q->bindValue(':id',$this->id_user);
        $q->execute();
  }
    public function ModifierUser()
    {
        $sql="UPDATE `user` SET `nom_user`=:nom,`prenom_user`=:pre,`mdp`=:mdp,`adresse`=:adr,`num_tel`=:num, `date_nais`=:dat  WHERE `id_produit`= :id";
        $q = $this->bd->prepare($sql);
        $q->bindValue(':nom',$this->nom_user);
        $q->bindValue(':pre', $this->prenom_user);
        $q->bindValue(':mdp', $this->mdp);
        $q->bindValue(':adr',$this->adresse);
        $q->bindValue(':num', $this->num_tel);
        $q->bindValue(':dat',$this->date_nais);
        $q->execute();        
    }
}
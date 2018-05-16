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
class User {
   private $id_user ;
  private $nom_user;
  private $prenom_user ;
  private $email ;
  private $mdp ;
  private $adresse ;
  private $num_tel ;
  private $date_nais ;
  private $role;
  private $bd;
  function __construct($nom,$prenom,$email,$mdp,$adr,$num,$dat,$role,$bd){
  	$this->nom_user=$nom;
  	$this->prenom_user=$prenom;
  	$this->email=$email;
  	$this->mdp=$mdp;
  	$this->adresse=$adr;
  	$this->num_tel=$num;
  	$this->$date_nais=$dat;
  	$this->role=$role;
  	$this->bd=$bd;
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
  public function getdateNais(){
  	return $this->date_nais;
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
  public function setdateNais($dat){
     $this->date_nais=$dat;
  }
  public function setRole($role){
   $this->role=$role;
  }
  public function AjouterUser()
  {
    $sql = "INSERT INTO `user` (`nom_user`, `prenom_user`,`email`,`mdp`,`adresse`,`num_tel`,`date_nais`,`role`) VALUES (:nom,:pre,:email,:mdp,:adr,:num,:dat,:role)";
        $q = $this->bd->prepare($sql);
        $q->bindValue(':nom',$this->nom_user);
        $q->bindValue(':pre', $this->prenom_user);
        $q->bindValue(':email',$this->email);
        $q->bindValue(':mdp', $this->mdp);
        $q->bindValue(':adr',$this->adresse);
        $q->bindValue(':num', $this->num_tel);
        $q->bindValue(':dat',$this->date_nais);
        $q->bindValue(':role', $this->role);
        $q->execute();
        echo "well done";
  }
     public function Verifuser($email,$mdp){
  	    $stmt = $this->bd->prepare("SELECT `mdp` FROM `user` WHERE `email`= :email ");
        $stmt->bindValue('email' ,$email);
        $res=$stmt->execute();
       if(res)
       {
       	$donnees = $res->fetch();
       	if($donnees['mdp']==$mdp)
       		return 1;
       	else
       		return 2;
       }
       else
       {
       	 return 0 ;
       }
       
  }
  public function SupprimerUser($id)
  {
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

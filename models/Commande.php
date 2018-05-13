<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commande
 *
 * @author oumayma
 */
class Commande {
  private $date_commande;
  private $prix_totale;
  private $id_user;
  function __construct($dat,$prix,$id_user){
  $this->date_commande=$dat;
  $this->prix_totale=$prix;
  $this->id_user=$id_user;
  }
  public function getDateCmd(){
  	return $this->date_commande;
  }
  public function getPrixCmd(){
  	return $this->prix_totale;
  }
  public function getIdUser(){
  	return $this->id_user;
  }
  public function setDateCmd($dat){
  	$this->date_commande=$dat;
  }
  public function setPrixCmd($prix){
  	$this->prix_totale=$prix;
  }
  public function setIdUser($id){
  	$this->id_user=$id;
  }
  public function AjouterCommande(){
  	   $sql = "INSERT INTO `commande`(`date_commande`,`prix_totale`,`id_user`) VALUES (:dat,:prix,:id)";
        $q = $this->bd->prepare($sql);
        $q->bindValue(':dat', $this->date_commande);
          $q->bindValue(':prix',$this->prix_totale);
        $q->bindValue(':id',$this->id);
        $q->execute();
        echo "well done";
  }
}

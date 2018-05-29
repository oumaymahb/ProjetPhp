<?php
include_once'../../models/Contact.php';


class ContactController {
     public function __construct()
    {

    }
      public function getAllContact(){
           $p=new Contact(0,'','','');
           return $p->getAllContacts();
      
    }
      public function getContacttsById($id){
           $p=new Contact(0,'','','');
           $pr=$p->getContactById($id);
             return $pr;
      
    }
    public function sendEmailToClient($email,$obj,$msg)
    {
   ini_set("SMTP","smtp.nyu.edu");
ini_set("smtp_port","587");

    $from ="oumayma.habouri@gmail.com";;
  
    $headers = "From:" . $from;
    mail($email,$obj,$msg,$headers);
    
   
    
    
    }
    public function sendEmailToAdmin($email,$obj,$msg){
    	 $p=new Contact(0,$obj,$email,$msg);
    	 return $p->AddContact();	
    }
    }

?>

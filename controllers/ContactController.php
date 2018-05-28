<?php
include_once'../../models/Contact.php';
include_once'../../models/PHPmailer.php';

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
 
$mail = new PHPMailer; // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "oumayma.habouri@gmail.com";
$mail->Password = "14761952";
$mail->SetFrom("oumayma.habouri@gmail.com");
$mail->Subject = $obj;
$mail->Body = $msg;
$mail->AddAddress($email);

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
    }
    }

?>

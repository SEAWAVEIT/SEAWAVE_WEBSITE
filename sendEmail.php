
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/PHPMailer.php');
require('PHPMailer/SMTP.php');

  if (isset($_POST)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

  $mail = new PHPMailer(true);


  try {

    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.office365.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'sales@seawave.in';                     
    $mail->Password   = '@Cloudm@il2#';                               
    $mail->SMTPSecure = 'tls';            
    $mail->Port       = 587;                                     


    $mail->setFrom('sales@seawave.in', 'Seawave Forwarding & Logistics');
    $mail->addAddress('sales@seawave.in');     


    $mail->isHTML(true);                                 
    $mail->Subject = 'Get a Free Quote';
    $mail->Body    = "Name: $name<br> Email: $email<br> Message: $message";

    $mail->send();

    echo "<script>alert('Message has been sent')</script>";
    } catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
    }

  }

  ?>
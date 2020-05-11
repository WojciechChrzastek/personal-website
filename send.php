<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

echo $name;
echo $email;
echo $message;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {

//Server settings
$mail->SMPTDebug = 2;  
//$mail->isSMTP();
$mail->Host = "smpt.abc.com";
$mail->SMTPAuth = "true";
$mail->Username = "mail@abc.com";
$mail->Password = "12345";
$mail->SMTPSecure = "tls";
$mail->Port="587";

//User data
$mail->From =( "xyz@zxc.com");
$mail->FromName = ("Jon Snow");
$mail->addReplyTo("xyz@zxc.com");

//Recipent
$mail->addAddress("recipent@qwe.com");

//Message body
$body = "<p><strong>Hello</strong>, you have recieved an enquiry from " . $name " the message is " . $message "</p>";

//Content
$mail->isHTML(true); 
$mail->Subject = "Enquiry from" . $name;
$mail->Body = "$body";
$mail->AltBody = "strip_tags($body)";



$mail->send();
echo "Message has been sent!";

} catch (Exception $e) {
  echo "Message could not be sent!";
  echo "Mailer error: ".$mail->ErrorInfo;
}

?>
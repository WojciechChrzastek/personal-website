<?php

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

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
$mail->From = $email;
$mail->FromName = $name;
$mail->addReplyTo = $email;

//Recipent
$mail->addAddress("w.chrzastek@gmail.com");

//Message body
$body = "<p><strong>Hello</strong>, you have recieved an enquiry from " . $name . ". The message is: " . $message . "</p>";

//Content
$mail->isHTML(true); 
$mail->Subject = "Your website contact form enquiry from: " . $name;
$mail->Body = "$body";
$mail->AltBody = "strip_tags($body)";

$mail->send();
// echo "Message has been sent!";
header("location: http://chrzastek.net/#contact");

} catch (Exception $e) {
  echo "Message could not be sent!";
  echo "Mailer error: ".$mail->ErrorInfo;
}

?>
<?php

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

use PHPMailer\ PHPMailer\ PHPMailer;
use PHPMailer\ PHPMailer\ SMTP;
use PHPMailer\ PHPMailer\ Exception;

$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

if($_POST['honey'] === "" && $name !== "" && $email !== "" && $message !== ""){
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
	    $signal = 'bad';
        $msg = 'Please type in valid email address.';
    }
    else{
        $mail = new PHPMailer();
        $mail -> CharSet = "UTF-8";
        // $mail -> SMTPDebug = 2;
        // $mail- > isSMTP();
        $mail -> Host = "smtp.abc.com";
        $mail -> SMTPAuth = "true";
        $mail -> Username = "mail@abc.com";
        $mail -> Password = "12345";
        $mail -> SMTPSecure = "tls";
        $mail -> Port = "587";
        
        //User data
        $mail -> From = $email;
        $mail -> FromName = $name;
        $mail -> addReplyTo = $email;
        
        //Recipent
        $mail -> addAddress("w.chrzastek@gmail.com");
        
        //Message body
        $body = "<p>" . "The message from <strong>".$name. "</strong> is: <br><br>" .$message. "</p>";
        
        //Content
        $mail -> isHTML(true);
        $mail -> Subject = "Chrzastek.net enquiry from: ".$name;
        $mail -> Body = "$body";
        $mail -> AltBody = "strip_tags($body)";
        
        if(!$mail->send()) {
            echo nl2br ("Message could not be sent.\n");
            echo 'Mailer Error: ' . $mail -> ErrorInfo;
        } else {
            $signal = 'ok';
            $msg = 'Your message has been sent.';
        }
    }
}
else{
    $signal = 'bad';
    $msg = 'Please fill in all the fields.';
}
$data = array(
    'signal' => $signal,
    'msg' => $msg
);
echo json_encode($data);

?>

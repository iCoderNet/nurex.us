<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

function send_mail($from_mail, $to_email, $subject, $message){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';  
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'phpshopuz@gmail.com';               
    $mail->Password   = 'ceyncamwdodadnqe';   
    $mail->SMTPSecure = 'ssl'; 
    $mail->Port = 465;

    $mail->setFrom($from_mail);
    $mail->addAddress($to_email);

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
}

function send_mail_user($to_email, $subject, $message){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';  
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'info@nurex.us';               
    $mail->Password   = 'kcmoloepcdqmbjxp';   
    $mail->SMTPSecure = 'ssl'; 
    $mail->Port = 465;

    $mail->setFrom('info@nurex.us');
    $mail->addAddress($to_email);

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
}
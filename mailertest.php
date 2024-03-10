<?php

require(dirname(__FILE__).'/vendor/fpdf/fpdf.php');
require(dirname(__FILE__).'/vendor/phpmailer/autoload.php');
require(dirname(__FILE__).'/vendor/phpmailer/phpmailer/src/Exception.php');
require(dirname(__FILE__).'/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require(dirname(__FILE__).'/vendor/phpmailer/phpmailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);
    $mail->IsSMTP();	
    $mail->Host     = 'bellshipitnow.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rouziercx@bellshipitnow.com';
    $mail->Password = 'rTUf]yCWbYEo';
    $mail->SMTPSecure = 'tls';
    $mail->Port     = 587;
    $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    
    $mail->setFrom('rouziercx@bellshipitnow.com', 'BellShipItNow');
                // Set an alternative reply-to address
                // $mail->addReplyTo('info@bellshipitnow.com', 'Care');
                // Set who the message is to be sent to
    $mail->addAddress('infohachiweb@gmail.com');
                // CC
    $mail->addCC('rouziercx@gmail.com');

        // Bcc
    $mail->addBcc('test@hachiweb.com');
                // Set the subject line
    $mail->Subject = "BellShipItNow Account Detail";

    $mail->Body = "Test mail";
    
    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
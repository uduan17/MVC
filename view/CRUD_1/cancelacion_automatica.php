<?php

$correo=$_GET['correo'];

//MENSAJE DE GMAIL
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require "../sms/PHPMailer/src/PHPMailer.php";
require "../sms/PHPMailer/src/SMTP.php";
require "../sms/PHPMailer/src/Exception.php";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   
    $mail->isSMTP();                                          
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                  
    $mail->Username   = 'motelsolylunatura@gmail.com';                    
    $mail->Password   = 'uawtqhlrskbvcozo';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
    $mail->Port       = 465;                                   

    //Recipients
    $mail->setFrom('motelsolylunatura@gmail.com');
    $mail->addAddress($correo);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Cancelacion automatica';
    $mail->Body    = 'Tu reserva ah sido cancelada por tiempo limite de espera';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "<h2>Revisa tu conexion a internet</h2>";
}

?>

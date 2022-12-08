<?php
include("conexion.php");
$con=conectar();


$correo=$_POST['correo'];
$ciudad=$_POST['ciudad'];
$texto=$_POST['texto'];
$fecha=$_POST['fecha'];



$sql="INSERT INTO pqrs (correo, ciudad, texto, fecha) VALUES ('$correo','$ciudad','$texto','$fecha')";
$query= mysqli_query ($con,$sql);

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
    $mail->Subject = 'PQRS';
    $mail->Body    = 'Gracias por darnos tu sugerencia, veremos que podemos hacer para seguir mejorando nuestro servicio😊 <br>'.   ' <br>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "<h2>Revisa tu conexion a internet</h2>";
}


if($query){
 Header("Location: ../template/ubicacion.php");
}
else {
    
}
?>
<?php

include("./db.php");

//CAMBIAR ESTADO//
$id=$_GET["id"];
$correo=$_GET['correo'];
$no=$_GET['no'];

$v="UPDATE usuarios SET reserva_programada='Cancelada' WHERE id_reserva='$id'";
$result=mysqli_query($conexion,$v);

$sql="UPDATE habitaciones SET bandera=0 WHERE no_habitacion='$no'";
$result=mysqli_query($conexion,$sql);

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
    $mail->Subject = 'Cancelacion por tiempo limite';
    $mail->Body    = 'Tu reserva ah sido cancelada por tiempo limite de espera, en el motel sol y luna.';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "<h2>Revisa tu conexion a internet</h2>";
}


if($result){
    header("location:./datatables/index.php");
}else{
    echo "Error";
}
?>

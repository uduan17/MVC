<?php

include("./db.php");

$id=$_GET["id"];
$no=$_GET['no'];
$correo=$_GET['correo'];
$tel=$_GET['tel'];
print_r($tel);

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
    $mail->Subject = 'Cancelacion de reserva';
    $mail->Body    = 'Su reserva ah sido cancelada, en el motel sol y luna😊';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "<h2>Revisa tu conexion a internet</h2>";
}

require_once('../What/ultramsg.class.php'); // if you download ultramsg.class.php

$ultramsg_token="gz1j1a4qljzm0mj0"; // Ultramsg.com token
$instance_id="instance25030"; // Ultramsg.com instance id
$client = new UltraMsg\WhatsAppApi($ultramsg_token,$instance_id);

$to='+57'. $tel; 
$body='Tu reserva ah sido cancelada en el motel sol y luna'; 
$api=$client->sendChatMessage($to,$body);
print_r($api);

if($result){
    header("location:../../index.php");
}else{
    echo "Error";
}
?>

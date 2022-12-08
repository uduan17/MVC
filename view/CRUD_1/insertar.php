<?php
include("conexion.php");
$con=conectar();


$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$fecha_ingreso=$_POST['fecha_ingreso'];
$nombre_habitacion=$_POST['nombre_habitacion'];
$tiempo_estadia=$_POST['tiempo_estadia'];
$precio=$_POST['precio'];
$reserva_programada=$_POST['reserva_programada'];
$codigo=$_POST['codigo'];
$no_habitacion=$_POST['no_habitacion'];
// $id_habitacion=$_POST['id_habitacion'];


$sql="INSERT INTO usuarios (correo, telefono, fecha_ingreso, nombre_habitacion, tiempo_estadia, precio, reserva_programada,codigo,no_habitacion) VALUES
('$correo','$telefono','$fecha_ingreso','$nombre_habitacion','$tiempo_estadia','$precio','$reserva_programada','$codigo','$no_habitacion')";
$query= mysqli_query ($con,$sql);

$sql1="UPDATE habitaciones SET bandera=1 where no_habitacion='$no_habitacion'";
// $sql2="INSERT INTO fechas (id_habitacion, fecha) VALUES ('$id_habitacion','$fecha_ingreso')";
$query= mysqli_query ($con,$sql1);
// $query= mysqli_query ($con,$sql2);


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
    $mail->Subject = 'Codigo de reserva';
    $mail->Body    = 'Tu reserva ah sido confirmada, en el motel sol y luna😊 <br>'.   'Conserva este código, para que lo presentes al llegar <br>' . $codigo ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    
} catch (Exception $e) {
    echo "<h2>Revisa tu conexion a internet</h2>";
}

// MENSAJE DE WhatsApp
// require_once ('vendor/autoload.php'); // if you use Composer
// require_once('../What/ultramsg.class.php'); // if you download ultramsg.class.php

// $ultramsg_token="gz1j1a4qljzm0mj0"; // Ultramsg.com token
// $instance_id="instance25030"; // Ultramsg.com instance id
// $client = new UltraMsg\WhatsAppApi($ultramsg_token,$instance_id);

// $to="+57". $telefono; 
// $body='Haz realizado una reserva en el motel sol y luna.ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ' . '¡Codigo de tu reserva!ㅤ' . $codigo; 
// $api=$client->sendChatMessage($to,$body);
// print_r($api);

if($query){
 Header("Location: ../template/detalle.php");
}
else {
    
}
?>
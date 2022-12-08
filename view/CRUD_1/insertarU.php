<?php

session_start();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

//   require_once 'conexion.php';
//   $conn = 'conexion.php'();
include("conexion.php");
$con=conectar();

$sql = "SELECT * FROM administrador WHERE usuario = '$usuario' AND contraseña = '$contraseña'";  

if(!$sql){ 
 echo "Usuario no existe " . $usuario . " " . $contraseña. " o hubo un error " . mysqli_error($mysqli);
} 
else{ 
// print "Bienvenido"; 
Header("Location: ./datatables/index.php");
} 


?>
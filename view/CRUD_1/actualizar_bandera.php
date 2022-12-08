<?php

include("conexion.php");
$con=conectar();


$id_habitacion=$_GET['id_habitacion'];


$sql="UPDATE habitaciones SET bandera=0 where id_habitacion='$id_habitacion'";
$query= mysqli_query ($con,$sql);

if($query){
    Header("Location: ./datatables/habitaciones.php");
}
else{
    echo 'error';
}
?>
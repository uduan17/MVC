<?php

include("conexion.php");
$con=conectar();

$id_reserva=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE id_reserva ='$id_reserva'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./datatables/reservasC.php");
    }
    else{
        echo 'mamañema';
    }
?>

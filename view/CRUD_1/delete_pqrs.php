<?php

include("conexion.php");
$con=conectar();

$id_pqrs=$_GET['id'];

$sql="DELETE FROM pqrs  WHERE id_pqrs ='$id_pqrs'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ./datatables/lista_de_pqrs.php");
    }
    else{
        echo 'mamañema';
    }
?>

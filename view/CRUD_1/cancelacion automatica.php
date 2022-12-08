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

if($result){
    header("location:../../index.php");
}else{
    echo "Error";
}
?>

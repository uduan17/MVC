<?php

include("./db.php");

//CAMBIAR ESTADO//
$id=$_GET["id"];
$v="UPDATE usuarios SET reserva_programada='Efectiva' WHERE id_reserva='$id'";
$result=mysqli_query($conexion,$v);

if($result){
    header("location:./datatables/index.php");
}else{
    echo "Error";
}
?>

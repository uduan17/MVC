<?php

include('../switalert/alert.php');
include("conexion.php");
$con=conectar();

$id_reserva=$_POST['id_reserva'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
// $titulo_habitacion=$_POST['titulo_habitacion'];
$nombre_habitacion=$_POST['nombre_habitacion'];

$sql="UPDATE usuarios SET  nombre_habitacion='$nombre_habitacion',telefono='$telefono', correo='$correo' WHERE  id_reserva= '$id_reserva' ";
$query=mysqli_query($con,$sql);

// $sql2="UPDATE habitaciones SET bandera=1 where titulo_habitacion='$titulo_habitacion'";
// $query=mysqli_query($con,$sql2);


    if($query){
        echo '<script>
        Swal.fire({
        icon: "success",
        title: "Reserva actualizada",
        showConfirmButton: true,
       }).then(function(result){
          if(result.value){
            window.location= "./datatables/index.php";
          }
        });
      </script>';
    } else{
        echo '<script>
        Swal.fire({
        icon: "error",
        title: "No se pudo actualizar",
        showConfirmButton: true,
       }).then(function(result){
          if(result.value){
            window.location= "./datatables/index.php";
          }
        });
      </script>';
    }
?>
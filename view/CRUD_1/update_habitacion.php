<?php
include('../switalert/alert.php');
include("conexion.php");
$con=conectar();


$no_habitacion=$_POST['no_habitacion'];
$foto=$_POST['foto'];
$titulo_habitacion=$_POST['titulo_habitacion'];
$descripcion=$_POST['descripcion'];
// $bandera=$_POST['bandera'];

$sql="UPDATE habitaciones SET  foto='$foto',titulo_habitacion='$titulo_habitacion',descripcion='$descripcion' WHERE  no_habitacion= '$no_habitacion' ";
$query=mysqli_query($con,$sql);

    if($query){
        echo '<script>
        Swal.fire({
        icon: "success",
        title: "Se actualizo",
        text: "Se actualizo correctamente",
        showConfirmButton: true,
       }).then(function(result){
          if(result.value){
            window.location= "./datatables/habitaciones.php";
          }
        });
      </script>';
    } else{
        echo '<script>
        Swal.fire({
        icon: "error",
        title: "Error",
        text: "No se pudo actualizar",
        showConfirmButton: true,
       }).then(function(result){
          if(result.value){
            window.location= "./datatables/habitaciones.php";
          }
        });
      </script>';
    }
?>
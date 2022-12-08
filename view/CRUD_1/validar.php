<?php

session_start();

include('db.php');

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


$consulta="SELECT * FROM administrador where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  $_SESSION['usuario']=$usuario;
    header ("location:./datatables/index.php");
}else{
    ?>
    <?php
    include("../login/login.php");

  ?>
  <h2 class="bad">Error usuario o contraseña incorrecta</h2>
  <?php
  
}
mysqli_free_result($resultado);
mysqli_close($conexion);

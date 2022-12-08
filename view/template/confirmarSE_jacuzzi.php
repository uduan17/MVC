<?php
include('../switalert/alert.php');

if ($_POST['codigo'] == "") {
  echo '<script>
  Swal.fire({
  icon: "error",
  title: "Error",
  text: "Debe generar el codigo para continuar",
  showConfirmButton: true,
 }).then(function(result){
    if(result.value){
      window.location= "./habitaciones/SE_con_jacuzzi.php?nh=22";
    }
  });
</script>';
  exit();
}

if (isset($_POST['reservar'])) {
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $fecha = $_POST['fecha_ingreso'];
  $suite = $_POST['nombre_habitacion'];
  $tiempo = $_POST['tiempo_estadia'];
  $reserva = $_POST['reserva_programada'];
  $codigo=$_POST['codigo'];
  $precio=$_POST['precio'];
  $no_habitacion=$_POST['no_habitacion'];
  $id_habitacion=$_POST['id_habitacion'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Page-Enter" content="blendTrans(duration=1)">
  <meta http-equiv="Page-Exit" content="revealTrans(duration=0.5, transition=5)">
  <link rel="stylesheet" href="../css/ff.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
  <title>Detalle reserva</title>
</head>

<body>


  <div class="loader-page">
  <h3>Espere por favor...</h3>
  </div>
  <center>
    <div class="modal">
      <h2>¿Desea confirmar su reserva?</h2>
      <b>
        <hr>
      </b> <br>
      <form action="../CRUD_1/insertar.php" method="POST">
        <strong>Correo</strong>
        <input type="hidden" name="id_habitacion" value="<?php echo $id_habitacion; ?>" readonly>
        <input name="correo" value="<?php echo $correo; ?>" readonly><br>
        <strong>Telefono</strong>
        <input type="" name="telefono" value="<?php echo $telefono; ?>" readonly><br>
        <strong>Nombre habitacion</strong>
        <input type="" name="nombre_habitacion" value=" <?php echo $suite; ?>" readonly><br>
        <input style="display: none;" type="datetime" name="fecha_ingreso" value="<?php echo $fecha; ?>">
        <strong>Tiempo de estadia</strong>
        <input type="" name="tiempo_estadia" value="<?php echo $tiempo .' Horas';?>  " readonly><br>
        <input type="hidden" name="reserva_programada" value="<?php echo $reserva; ?>" readonly>
        <input type="hidden" name="no_habitacion" value="<?php echo $no_habitacion; ?>" readonly>
        <strong>Codigo</strong>
        <input type="" name="codigo" value="<?php echo $codigo;?>" readonly> <br>
        <strong>Precio</strong>
        <input type="text" name="precio" value="<?php echo $precio;?>" readonly>
        <div class="botones">
       <br>
          <button onclick=(window.history.back(-1)) type="button" class="bt">Cancelar</button>
          <button type="submit" class="btn" name="enviar">Confirmar</button>
      </form>
    </div>
    </div>
  </center>
  
  <script type="text/javascript">
    function generar() {
        $.ajax({
            url:'contrasenaAleatoria.php',
            type: 'post',
            success: function (response){
                $("#resultado").val(response);
            }
        })
    }
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->

  <script src="../js/main.js"></script>

</body>
</html>
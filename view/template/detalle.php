<?php
include("../CRUD_1/conexion.php");
$con = conectar();

$sql = "SELECT * FROM usuarios ORDER by id_reserva DESC LIMIT 1;";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> Detalle-reserva</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/footer.css">
  <!-- <link rel="stylesheet" href="../css/ff.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
</head>
<body>

 
<nav class="navbar navbar-expand-lg" style="background-color: #1f4f73; color:white;">
  <div class="container-fluid">
  <img src="../img/logo.png" alt="" style="height:100px; padding:6px; filter:drop-shadow(5px 6px 5px rgba(0, 0, 0, 0.7));">
    <button class="navbar-toggler  bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="bi bi-list"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../../index.php" style="color:white; font-size:19px;">Inicio</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>

  <center>
    <div class="servicio">
      <div class="contenedor_1 w-75">
        <h5>Detalles de su reserva</h5>
      </div>
      <div class="contenedor_1 d-flex w-75">
        <?php
        while ($row = mysqli_fetch_array($query,)) {
        ?>
          <div class="col-md-6">

            <strong>Correo</strong><br>
            <?php echo $row['correo'] ?>
            <hr>
            <strong>Telefono</strong><br>
            <?php echo $row['telefono'] ?>
            <hr>
            <strong>Fecha y hora</strong><br>
            <?php echo $row['fecha_ingreso'] ?>
            <hr>
            <strong>Horas solicitadas</strong><br>
            <?php echo $row['tiempo_estadia'] ?>
          </div>

          <div class="col-md-6">
            <strong>Precio</strong><br>
            $<?php echo $row['precio'] ?>
            <hr>
            <strong>Codigo de la reserva</strong><br>
            <?php echo $row['codigo'] ?>
            <hr>
            <strong>Tipo de habitacion</strong><br>
            <?php echo $row['nombre_habitacion'] ?>
            <hr>
            <strong style="color:yelow;">Forma de pago</strong>
          <p>En el lugar</p>

          </div>
    <?php
        }
    ?>
    </div>
  </center>
  <br>
 
  <?php
  include("../CRUD_1/db.php");
  // $con = conectar();
  $sql= "SELECT * FROM usuarios ORDER BY id_reserva  DESC LIMIT 1";
  $query = mysqli_query($conexion, $sql);

  ?>
 <?php
        while ($row = mysqli_fetch_array($query,)) {
        ?>
  <div class="cancelar-reserva flex-wrap text-center">
    <button class="btn" style="background-color:#FA7E64; color:white;" data-bs-toggle="modal" data-bs-target="#a<?php echo $row['id_reserva'];?>">Cancelar reserva</button>
  <h6>Espero que puedas disfrutar de nuestros servicios &#128522 <br> ¡Vuelve pronto!&#128513</h6>
  </div>

  <!-- Modal para cancelar-->
  <div class="modal fade" id="a<?php echo $row['id_reserva'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <img src="../img/logo.png" alt="" style="width: 50px;">
          <h6 class="modal-title" id="exampleModalLabel">Cancelar reserva</h6>
          <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
        </div>
        <div class="modal-body">
          <h6>¿Estas seguro de cancelar tu reserva?</h6>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <a href="../CRUD_1/cancelar-reserva.php?id=<?php echo $row['id_reserva'];?>&no=<?php echo $row['no_habitacion'];?>&correo=<?php echo $row['correo'];?>&tel=<?php echo $row['telefono'];?>" class="btn btn-danger"> Si, cancelar</a>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure class="logo-footer">
          <a href="#">
            <img src="../img/logo.png" alt="">
          </a>
        </figure>
      </div>
      <div class="box2">
        <div class="parrafo">
          <h2>Motel sol y luna. <br> <br>
            Donde el amor <br> no tiene horario
          </h2>

        </div>
      </div>
      <div class="box3">
        <h2>Contactar</h2>
        <div class="red-social">
          <a href="#" class="fa fa-facebook" style="font-size: 25px;"></a>
          <a href="#" class="fa fa-instagram" style="font-size: 25px;"></a>
          <a href="#" class="fa fa-whatsapp" style="font-size: 25px;"></a>
        </div>
      </div>
    </div>
    <div class="pie-pagina2">
      <p>&copy; 2022 Motel Sol & Luna <br> <b>Todos los derechos reservados </b> </p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>
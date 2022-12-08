<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Habitaciones</title>
  <link rel="stylesheet" href="./css/style.css">
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>
  <script defer src="../../js/java.js"></script>
</head>

<body>
  <!--MENÚ NAVBAR RESPONSIVE-->
  <nav class="nav">
    <button class="nav-toggle" aria-label="Abrir menú">
      <i class="fa-solid fa-bars"></i>
    </button>

    <!--BARRA NAVBAR-->
    <div class="navbar">
      <ul class="nav-menu">
        <li class="nav-menu-item"><a href="../../../index.php">Inicio</a></li>
        <li class="nav-menu-item"><a href="../habitaciones/habitaciones.php">Habitaciones</a></li>
        <li class="nav-menu-item"><a href="../comidas.php">Productos</a></li>
        <li class="nav-menu-item"><a href="../ubicacion.php">Ubicación</a></li>
      </ul>
    </div>
  </nav>

<!-- SCROLL -->
<div id="button-up">
<i class="bi bi-chevron-double-up" style=" font-size: 25px;"></i>
</div>


  <!--LOGO-->
  <img src="IMG/logo.png" class="logo" alt="" />

  <!--HABITACIONES-->
  <div class="contenedor">
    <div class="titulo">
      <br>
      <br>
      <h3> Habitaciones desde $ 21.000</h3>
    </div>
    <br>
    <br>


    <!-- JUNIOR SUITE -->
    <h2 class="junior">Junior suite</h2>
    <hr class="hr">
    <div class="container1">
      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '3'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?> >
          <div class="img">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
          </div>
          <br>
          <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
          <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></4> 
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./junior_suite.php?nh=12" <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
      <?php
      }
      ?>

      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '2'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?>>
          <div class="img">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
          </div>
          <br>
          <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
          <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></h4>
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./junior_suite_sencilla2.php?nh=20" <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
      <?php
      }
      ?>

      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '4'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?>>
          <div class="img">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
          </div>
          <br>
          <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
          <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></h4>
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./junior_suite_sencilla3.php?nh=23" <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
      <?php
      }
      ?>
    </div>


    <!-- SUITE ESPECIAL -->
    <h2 class="junior">Suite Especial</h2>
    <hr class="hr">
    <div class="container3">
      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '10'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?>>
          <div class="img">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
          </div>
          <br>
          <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
          <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></4>
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./SE_decoracion.php?nh=11"<?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
      <?php
      }
      ?>

      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '11'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?>>
          <div class="img">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
          </div>
          <br>
          <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
          <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></h4>
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./SE_con_barra_pole_dance.php?nh=25" <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
      <?php
      }
      ?>

      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '12'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?>>
          <div class="img">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
          </div>
          <br>
          <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
          <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></h4>
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./SE_con_jacuzzi.php?nh=22" <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
      <?php
      }
      ?>

      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '13'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?>>
          <div class="img">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
          </div>
          <br>
          <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
          <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></h4>
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./SE_sencilla.php?nh=3" <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
      <?php
      }
      ?>
    </div>

    <!-- SUITE REMODE -->
    <h2 class="junior">Suite Remodelada</h2>
    <hr class="hr">
    <div class="container2">
      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '6'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?>>
          <div class="img">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
          </div>
          <br>
          <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
          <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></4>
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./SR_silla_del_amor.php?nh=10"<?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
      <?php
      }
      ?>

      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '7'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?>>
          <div class="img">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
          </div>
          <br>
          <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
          <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></h4>
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./SR_con_jacuzzi.php?nh=8" <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
      <?php
      }
      ?>

      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '8'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?>>
          <div class="img">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
          </div>
          <br>
          <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
          <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></h4>
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./SR_sencilla.php?nh=5" <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button>
        </a>
        </div>
      <?php
      }
      ?>

      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '9'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'; ?>>
         
          <div class="img">
              <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
              </div>
              <br>
              <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
              <h4 style="display: none;"><?php if ($row['bandera'] == 0) echo $row['no_habitacion']; ?></h4>
          <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
          <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
              <a href="./SR_decorada.php?nh=9" <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
      <?php
      }
      ?>
    </div>

    <!-- SUITE PISCINA -->
    <h2 class="junior">Suite Piscina</h2>
    <hr class="hr">
    <div class="container1">
      <?php
      include("../../CRUD_1/db.php");
      $query = "SELECT * FROM `habitaciones` WHERE id_habitacion = '5'";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
      ?>
        <div class=" card card-1" <?php if ($row['bandera'] == 1) echo 'style="background-color:#DAD0CE;"'?>>
            <div class="img">
              <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>"> <br>
             </div>
             <br>
             <p class="ppp"><?php if ($row['bandera'] == 1) echo 'Habitacion reservada'; ?></p>
              <h4 style="display: none;"><?php $row['no_habitacion']; ?></4>
                <h4><?php if ($row['bandera'] == 0) echo $row['titulo_habitacion']; ?></h4>
                <p><?php if ($row['bandera'] == 0) echo $row['descripcion']; ?></p> <br>
          <a href="./suite_piscina.php?nh=15" <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><button class="habitacion-buton" style="text-decoration: none;cursor:pointer;">Reservar</button> 
          </a>
        </div>
        </div>
      <?php
      }
      ?>
   

    <!--FOOTER-->
    <footer class="pie-pagina">
      <div class="grupo-1">
        <div class="box">
          <figure class="logo-footer">
            <a href="#">
              <img src="img/logo.png" alt="Logo de SLee Dw">
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


    <script src="../../js/scroll.js"></script>
</body>

</html>
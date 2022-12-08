<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubicacion</title>
  <link rel="stylesheet" href="../css/ubicacion.css">
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/header.css">
  <header class="header">
    <nav class="nav">
      <button class="nav-toggle" aria-label="Abrir menú">
        <i class="fa-solid fa-bars"></i>
      </button>

      <!--BARRA NAVBAR-->
      <div class="navbar">
        <ul class="nav-menu">
          <li class="nav-menu-item"><a href="../../index.php">Inicio</a></li>
          <li class="nav-menu-item"><a href="./habitaciones/habitaciones.php">Habitaciones</a></li>
          <li class="nav-menu-item"><a href="./comidas.php">Productos</a></li>
          <li class="nav-menu-item"><a href="./ubicacion.php">Ubicación</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <img src="../img/logo.png" class="logo" alt="" />

</head>

<body>
  <!--TITULO-->
  <div class="titulo">
    <br>
    <br>
    <h1 class="h1">Ubicación</h1>
  </div>

 

  <div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5629.502559447076!2d-77.02460710439865!3d3.88298316447483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3724a87dd9f103%3A0x8de4ad1a896ffa35!2sMotel%20Sol%20y%20Luna!5e0!3m2!1ses!2sco!4v1647435019824!5m2!1ses!2sco" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="pqrs">
    <h6>Dejanos aqui tus dudas, quejas o sugerencias sobre nuestro servicio</h6> <br>
    <div class="pqrs1">
      <form action="../CRUD_1/pqrs.php" method="post">
      <input type="text" placeholder="Ciudad" name="ciudad" required> <br>
      <input type="datetime" name="fecha" style="display: none;" value="<?php date_default_timezone_set('America/Bogota');  echo date("Y-m-d H:i:s a"); ?>">
      <input type="email" placeholder="Correo" name="correo" required><br>
      <textarea name="texto" id="idTextarea" cols="30" rows="10" placeholder="¿Que quieres decir?"   required></textarea>
      <div class="btn">
        <button type="submit">Enviar</button>
        </form>
      </div>
    </div>

  </div>
</div>


  

  </div>
  <link rel="stylesheet" href="../css/footer.css">
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>
<br>
  <hr>
  <!--INFORMACION DE CONTACTO-->
  <br>
  <div class="adicional">
    <h2>INFORMACION DEL CONTACTO ADICIONAL</h2>
  </div>
  <br>
  <center>
    <div class="contacto">
      <p> <img class="img-icon" src="IMG/" alt=""> info@motelsolyluna.org</p>
    </div>
  </center>
  <br>
  <br>
  <br>

<br>
<br>

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

  <script src="../js/index.js"></script>
  <!-- <script src="../js/texarea.js"></script> -->

</body>

</html>
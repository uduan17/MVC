<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="view/css/Slider.css">
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="view/css/header.css">
  <link rel="stylesheet" href="view/css/footer.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
        <li class="nav-menu-item"><a href="">Inicio</a></li>
        <li class="nav-menu-item"><a href="view/template/habitaciones/habitaciones.php">Habitaciones</a></li>
        <li class="nav-menu-item"><a href="view/template/comidas.php">Productos</a></li>
        <li class="nav-menu-item"><a href="view/template/ubicacion.php">Ubicación</a></li> <br><br>
      
      </ul>
    </div>
  </nav>

  <!-- LOGO -->
  <img src="view/img/logo.png" class="logo" alt="" />


  <!--SLIDER-->
  <div class="slider_1">
    <ul>
      <li><img src="view/template/habitaciones/IMG/fondo1.jpg" alt="" /></li>
      <li><img src="view/template/habitaciones/IMG/fondo2.jpg" alt="" /></li>
      <li><img src="view/template/habitaciones/IMG/fondo3.jpg" alt="" /></li>
    </ul>
  </div>


  <!-- <div class="todo">
    <div class="texto">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ex repellendus,
        ipsa suscipit, eaque sequi laudantium dolorem vero enim consequatur placeat,
        laborum cum quia quaerat dolorum sunt eius error commodi?</p>
    </div>
  </div> -->


  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure class="logo-footer">
          <a href="#">
            <img src="view/img/logo.png" alt="">
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
          <a href="https://es-la.facebook.com/motelsolylunabuenaventura/" class="fa fa-facebook" style="font-size: 25px;"></a>
          <a href="#" class="fa fa-instagram" style="font-size: 25px;"></a>
          <a href="#" class="fa fa-whatsapp" style="font-size: 25px;"></a>
        </div>
      </div>
    </div>
    <div class="pie-pagina2">
      <p>&copy; 2022 Motel Sol & Luna <br> <b>Todos los derechos reservados </b> </p>
    </div>
    <a class="aaa tooltip" href="view/login/login.php">
        <i class="bi bi-person-circle">
          <span class="tooltiptext">Iniciar sesion</span></i>
        </a>
  </footer>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>
  <script src="view/js/index.js"></script>

</body>

</html>
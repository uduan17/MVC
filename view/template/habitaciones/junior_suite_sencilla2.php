<?php

$n_h = $_GET['nh'];

include("../../CRUD_1/db.php");
$query="SELECT id_habitacion FROM habitaciones WHERE no_habitacion=$n_h";
$resultado = $conexion->query($query);
$id=$resultado->fetch_all();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Junior Suite </title>
  <script src="../../view/js/solonumeros.js"></script>
  <link rel="stylesheet" href="../../css/junior_suite.css">
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
    const max = document.getElementById("#tel").value();
    if(max.length<10){
      alert('olakase');
      return false;
    }
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<?php

$n_h = $_GET['nh'];
// echo $n_h;

?>

<body>
  <!--MENÚ NAVBAR RESPONSIVE-->
  <header class="header">
    <nav class="nav">
      <button class="nav-toggle" aria-label="Abrir menú">
        <i class="fa-solid fa-bars"></i>
      </button>

      <!--BARRA NAVBAR-->
      <div class="navbar">
        <ul class="nav-menu">
          <li class="nav-menu-item"><a href="../../../index.php">Inicio</a></li>
          <li class="nav-menu-item"><a href="./habitaciones.php">Habitaciones</a></li>
          <li class="nav-menu-item"><a href="../comidas.php">Productos</a></li>
          <li class="nav-menu-item"><a href="../ubicacion.php">Ubicación</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <!--LOGO-->
  <img src="IMG/logo.png" class="logo" alt="" />


  <!--SERVICIOS-->
<center>
  <div class="fotos table-responsive-lg d-flex">
    <img src="../habitaciones/IMG/suite especial8.jpg" class="p-1" style="width: 32%; height:300px; border-radius:8px;">
      <img src="../habitaciones/IMG/suite especial7.jpg" class="p-1" style="width: 33%; height:300px; border-radius:8px;">
      <img src="../habitaciones/IMG/Img1.jpg" class="p-1" style="width: 34%; height:300px; border-radius:8px;">
  </div>
  </center>
  <div class="container1 flex-wrap">
    <div class="fluid">
      <div class="titulo-servi">
        Junior Suite 2
      </div>
      <hr>

      <div class="titulo-servi">
        Servicios
      </div>
      <div class="container">
        <div class="card">
          <div class="card-text">
            <i class="ICONS"><img src="img/tv.png" alt=""></i>
            <p>TV</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <i class="ICONS"><img src="../habitaciones/IMG/Restaurant.png" alt=""></i>
            <p>Servicio de comida</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <i class="ICONS"><img src="img/Wifi.png" alt=""></i>
            <p>Wifi</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <i class="ICONS"> <img src="img/tarjeta.png" alt=""></i>
            <p>Pago con tarjetas</p>
          </div>
        </div>
        <div class="card">
          <div class="card-text">
            <i class="ICONS"> <img src="img/aire.png" alt="" width="35px"></i>
            <p>Aire acondicionado</p>
          </div>
        </div>
      </div>
      <hr>
      <div class="titulo-servi1">
        Siempre ten en cuenta
      </div>
      <div class="check" style="margin:10px ;">
        <p>
          <img class="check-icon" src="img/check.png" align="center">Una vez hecha la reserva,
          tu habitación se guardará sólo por cierta cantidad
          de minutos. Ese es el tiempo máximo que tienes para llegar. 
        </p>
        <p>
          <img class="check-icon" src="img/check.png" align="center">Solo para mayores de edad (+18).
        </p>
        <p>
          <img class="check-icon" src="img/check.png" align="center">Puedes estar tranquilo, tu información está a salvo
          con nosotros.
        </p>
      </div>
    </div>

    <form class="form">
      <h5 class="form_title" id="info">Informacion de la reserva</h5>

      <div class="form_container flex-wrap">

      <div class="form_group flex-wrap">
          <h6 class="form_label">Tiempo de espera</h6>
          <p>(60 minutos) despues hacer tu reserva </p> 
        </div>
        <hr style="margin-left: 4px;">
        <div class="form_group">
          <label for="estadia" class="form_label">Estadia</label>
          <p>Puedes elegir entre tres tipos de horas disponibles para ti</p>
          3 Horas = $21.000 <br>
          5 Horas = $35.000 <br>
          8 Horas = $56.000
        </div>
        <button type="button" class="btn1" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Solicitar reserva</button>
      </div>
  </div>
  </form>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Reservar</h5>
          <img src="../habitaciones/IMG/logo.png" alt="" style="width: 50px;">
        </div>
        <div class="modal-body" style="background-color:#053F62;">
          <form action="../confirmarJ2.php" method="post">
            <center>
              <input type="email" formnovalidate placeholder="Correo" name="correo" required class="input_select">
              <input type="tel" placeholder="Telefono-celular" name="telefono" required pattern="[0-9]{10}" class="input_select">
              <input style="display: none;" type="datetime" name="fecha_ingreso" value="<?php date_default_timezone_set('America/Bogota');  echo date("Y-m-d H:i:s a"); ?>">
              <input type="hidden" name="id_habitacion"  value="<?php echo $id[0][0]; ?>">
              <input type="hidden" name="reserva_programada" value="Reserva programada" />
              <input type="hidden" name="no_habitacion" value="<?php echo $n_h ?>" />
              <input type="text"  name="nombre_habitacion" required readonly class="input_select" value="Js sencilla 2 "> 


              <select class="form_select" aria-label="Default select example" name="tiempo_estadia" id="precio2" onchange="seleccionarPrecio();" required style="width:60%">
                <option default>Seleccione las horas</option>
                <option value="3">3 Horas</option>
                <option value="5">5 Horas</option>
                <option value="8">8 Horas</option>
              </select> <br>
              <input type="" class="input_select" placeholder="Precio por horas" id="LenguajeSeleccionado" name="precio" readonly />
              <br>
              <strong style="color: white;">Genera tu codigo</strong> <br>
              <input type="text" size="4" maxlength="5" onfocus="test(this)" name="codigo" class="bg-white" readonly >
            </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:#0e5c83">Cerrar</button>
          <button type="submit" name="reservar" class="btn btn-primary" style="background-color:#053F62;">Reservar</button>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    // <![CDATA[
    function test(n) {
      var text = "";
      var rand = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      for (var i = 0; i < 5; i++) {
        text += rand.charAt(Math.floor(Math.random() * rand.length));
      }
      n.value = text;
    }
    // ]]>
  </script>

  <!--FOOTER-->
  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure class="logo-footer">
          <a href="#">
            <img src="img/logo.png" alt="">
          </a>
        </figure>
      </div>
      <div class="box2">
        <h2>Motel sol y luna. <br> <br>
          Donde el amor <br> no tiene horario
        </h2>
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


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script defer src="../../js/java.js"></script>
  <script defer src="funcion.js"></script>
  <span id="funciones_2"></span>
  <script defer src="../../js/JS_sencilla.js"></script>
</body>

</html>
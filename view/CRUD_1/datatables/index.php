<?php
include("../conexion.php");
$con = conectar();

session_start();
if (!isset($_SESSION['usuario'])) {
  echo "<script>alert('Debes iniciar sesion'); location='../../login/login.php';</script>";
};

$sql = "SELECT * FROM usuarios WHERE reserva_programada= 'Reserva programada'";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Reservas</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/footer.css">
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="main.css">

  <!--datables CSS básico-->
  <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
  <!--datables estilo bootstrap 4 CSS-->
  <link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

  <!--font awesome con CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <!-- BOOSTRAP IICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>



  <nav class="navbar navbar-expand-lg" style="background-color: #1f4f73; color:white;">
    <div class="container-fluid">
      <img src="../../img/logo.png" alt="" style="height:100px; padding:6px; filter:drop-shadow(5px 6px 5px rgba(0, 0, 0, 0.7));">
      <button class="navbar-toggler  bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="habitaciones.php" style="color:white; font-size:19px;">Habitaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../graficobar.php" style="color:white; font-size:19px;">Reportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="lista_de_pqrs.php" style="color:white; font-size:19px;">PQRS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../close_session.php" style="color:white; font-size:19px;">Salir</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- GRUPO DE BOTONES -->
  <div class="reservas" style="margin-left:6%;margin-bottom:13px; margin-top: 17px;">
    <a href="../datatables/reservasE.php" class="text-white btn btn-success" style="text-decoration: none;">Reservas efectivas</a>
    <a href="../datatables/reservasC.php" class="text-white btn btn-danger" style="text-decoration: none;">Reservas canceladas</a>
  </div>

  <div class="contenedor" style="margin: auto; width:85%;">
    <div class="row">
      <!-- <div class="col-lg-12"> -->
      <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th scope="col">Correo</th>
              <th scope="col">Telefono</th>
              <th scope="col">Fecha registro</th>
              <th scope="col">Estadia</th>
              <th scope="col">Habitacion</th>
              <th scope="col">Precio</th>
              <th scope="col">Codigo</th>
              <th scope="col">No_habitacion</th>
              <th scope="col">Estado-reserva</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
              <th scope="col">Estado</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
              <tr class="text-center">
                <td><?php echo $row['correo'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td><?php echo $row['fecha_ingreso'] ?></td>

                <?php
                date_default_timezone_set('America/Bogota');
                $id_reserva = $row['id_reserva'];
                $no_habitacion = $row['no_habitacion'];

                $fecha_actual= strtotime(date("Y-m-d H:i:s"));
                
                $fecha_inicio = $row['fecha_ingreso'];
                $fecha_limite = date('Y-m-d H:i:s', strtotime($fecha_inicio . '+2 minute'));
                print_r($fecha_limite);

                if (strtotime($fecha_limite) < $fecha_actual){
                  $v = "UPDATE usuarios SET reserva_programada='Cancelada' WHERE id_reserva='$id_reserva'";
                  $result = mysqli_query($con, $v);
                  $sql = "UPDATE habitaciones SET bandera=0 WHERE no_habitacion='$no_habitacion'";
                  $result = mysqli_query($con, $sql);
                }else{
                  echo "";
                }
                ?>

                <td><?php echo $row['tiempo_estadia'] ?></td>
                <td><?php echo $row['nombre_habitacion'] ?></td>
                <td><?php echo ('$ '), $row['precio'] ?></td>
                <td><?php echo $row['codigo'] ?></td>
                <td><?php echo $row['no_habitacion'] ?></td>
                <td><?php echo $row['reserva_programada'] ?></td>
                <td><a href="../actualizar.php?id=<?php echo $row['id_reserva'] ?>"><i class="bi bi-pencil-square" style="color: green; cursor:pointer;font-size:20px;"></i></a></td>
                <td><i class="bi bi-trash" style="color: red; cursor:pointer; font-size:20px;" data-bs-toggle="modal" data-bs-target="#a<?php echo $row['id_reserva']; ?>"></i></i></td>
                <td><button class="btn btn-success btn-sm rr" data-bs-toggle="modal" data-bs-target="#E<?php echo $row['id_reserva']; ?>">Efectiva</button></td>
                <td><button class="btn btn-danger btn-sm rr" data-bs-toggle="modal" data-bs-target="#C<?php echo $row['id_reserva']; ?>">Cancelado</button></td>
              </tr>

              <!-- Modal  para eliminar-->
              <div class="modal fade" id="a<?php echo $row['id_reserva']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <img src="../../img/logo.png" alt="" style="width: 50px;">
                      <h4 class="modal-title" id="exampleModalLabel">Eliminar</h4>
                      <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                      <h6>¿Estas seguro de eliminar este registro?</h6>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <a href="../delete.php?id=<?php echo $row['id_reserva']; ?>" class="btn btn-danger"> Si, eliminar</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Para efectiva-->
              <div class="modal fade" id="E<?php echo $row['id_reserva']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <img src="../../img/logo.png" alt="" style="width: 50px;">
                      <h4 class="modal-title" id="exampleModalLabel">Efectiva</h4>
                      <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                      <h6>¿Estas seguro de cambiar el estado de esta reserva a efectiva?</h6>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <a href="../estado.php?id=<?php echo $row['id_reserva']; ?>" class="btn btn-success"> Si, cambiar</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal para cancelar-->
              <div class="modal fade" id="C<?php echo $row['id_reserva']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <img src="../../img/logo.png" alt="" style="width: 50px;">
                      <h4 class="modal-title" id="exampleModalLabel">Cancelado</h4>
                      <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    </div>
                    <div class="modal-body">
                      <h6>¿Estas seguro de cambiar el estado de esta reserva a cancelada?</h6>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <a href="../estado2.php?id=<?php echo $row['id_reserva']; ?>&correo=<?php echo $row['correo']; ?>&no=<?php echo $row['no_habitacion']; ?>" class="btn btn-danger"> Si, cambiar</a>
                    </div>
                  </div>
                </div>
              </div>

            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
  <!-- </div> -->


  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure class="logo-footer">
          <a href="./index.php">
            <img src="../../img/logo.png" alt="">
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

  <!-- jQuery, Popper.js, Bootstrap JS -->
  <script src="jquery/jquery-3.3.1.min.js"></script>
  <script src="popper/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- datatables JS -->
  <script type="text/javascript" src="datatables/datatables.min.js"></script>

  <!-- para usar botones en datatables JS -->
  <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>
  <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
  <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
  <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>

  <!-- código JS propìo-->
  <script type="text/javascript" src="main.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>
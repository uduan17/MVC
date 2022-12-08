<?php
include("../conexion.php");
$con = conectar();

session_start();
if(!isset($_SESSION['usuario'])){
  echo "<script>alert('Debes iniciar sesion'); location='../../login/login.php';</script>";
};

$sql = "SELECT *  FROM habitaciones";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> Habitaciones</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/footer.css">
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script>

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/84fcd47960.js" crossorigin="anonymous"></script> -->

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
        <a class="nav-link active" aria-current="page" href="index.php" style="color:white; font-size:19px;">Reservas</a>
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

<br>

  <div class="contenedor w-75" style="margin: auto;">
    <div class="row" >
      <!-- <div class="col-lg-12"> -->
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
              <th scope="col">No.habitacion</th>
              <th scope="col">Imagen</th>
            <th scope="col">Titulo Habitacion</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Editar</th>
            <th scope="col">Cancelado</th>
              </tr>
            </thead>
              <tbody>
              <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr class="text-center">
                <?php
              if ($row['bandera']==1) { ?>
                <td style="background-color:#FADBD8"><?php echo $row['id_habitacion']; ?></td>
              <?php }else {?>
                <td ><?php echo $row['id_habitacion']; ?></td>
              <?php } ?>
              <?php
              if ($row['bandera']==1) { ?>
                <td style="background-color:#FADBD8"><img height="50px" width="50px" class="rounded" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>" /></td>
              <?php }else {?>
                <td ><img height="50px" width="50px" class="rounded" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>" /></td>
              <?php } ?>
              <?php
              if ($row['bandera']==1) { ?>
                <td style="background-color:#FADBD8"><?php echo $row['titulo_habitacion']; ?></td>
              <?php }else {?>
                <td ><?php echo $row['titulo_habitacion']; ?></td>
              <?php } ?>
              <?php
              if ($row['bandera']==1) { ?>
                <td style="background-color:#FADBD8"><?php echo $row['descripcion']; ?></td>
              <?php }else {?>
                <td ><?php echo $row['descripcion']; ?></td>
              <?php } ?>

              <td><a href="../actualizar_habit.php?id_habitacion=<?php echo $row['id_habitacion'] ?>"  <?php if ($row['bandera'] == 1) echo 'style="display: none;"'; ?>><i class="bi bi-pencil-square"style="color: green; cursor:pointer;font-size:20px;"></i></a></td>
              <td><a href="../actualizar_bandera.php?id_habitacion=<?php echo $row['id_habitacion'] ?>"><i class="bi bi-cash-coin"style="color: red; cursor:pointer;font-size:20px;"></i></a></td>
            </tr>
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
          <a href="./habitaciones.php">
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
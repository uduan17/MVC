<?php
include("conexion.php");
$con = conectar();

$id_reserva = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id_reserva='$id_reserva'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="../css/crud.css" rel="stylesheet">
    <title>Actualizar</title>

</head>

<body>
    <div class="botom p-3">
        <a href="./datatables/index.php" class="volver"><button class="buton">volver</button></a>
    </div>

    <div class="form">
        <div class="form_container">
            <div class="form_group_1">
                <form action="update.php" method="POST">
                    <input type="hidden" name="id_reserva" value="<?php echo $row['id_reserva']  ?>">
                    <input type="email" name="correo" value="<?php echo $row['correo']  ?>">
                    <input type="telefono" name="telefono" value="<?php echo $row['telefono']  ?>">
                          <select class="form_select" name="nombre_habitacion" aria-label="Default select example">
                              <option selected><?php echo $row['nombre_habitacion']?> </option>
                          <?php
                        include("./db.php");
                        $sql = "SELECT * FROM habitaciones";
                        $query = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($query)) {
                          ?>
                            <option <?php if ($row['bandera']==1) echo 'style="display:none"';?>><?php echo $row['titulo_habitacion'];?></option>
                            <?php 
                        }
                    ?>
                    </select> 
                    <br> <br>
                    <center>
                    <button type="submit" class="form_submit"> Actualizar</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
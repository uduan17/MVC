<?php
include("conexion.php");
$con = conectar();

$id_habitacion = $_GET['id_habitacion'];

$sql = "SELECT * FROM habitaciones WHERE id_habitacion='$id_habitacion'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link href="../css/crud1.css" rel="stylesheet">
    <title>Actualizar-habitaciones</title>

</head>

<body>
    <div class="p-3">
    <a href="./datatables/habitaciones.php" class="volver"><button class="buton">Volver</button></a>
    </div>
    <div class="form">
        <div class="form_container">
            <div class="form_group_1">
                <form action="update_habitacion.php" method="POST">
                    <input type="hidden" name="no_habitacion" value="<?php echo $row['no_habitacion']  ?>">
                    <label for="" class="text-white">Titulo habitacion</label>
                    <input type="text" name="titulo_habitacion" value="<?php echo $row['titulo_habitacion']  ?>" required>
                    <label for="" class="text-white">Descripcion</label> <br>
                    <textarea name="descripcion" id="" cols="30" rows="10"><?php echo $row['descripcion']; ?></textarea>
                    <input type="hidden" name="bandera" value="<?php echo $row['bandera']  ?>" readonly>
                    <br> <br>
                    <button type="submit" class="form_submit"> Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
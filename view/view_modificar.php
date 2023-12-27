<?php 
include "../model/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("select * from carros where placa='$id'");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="col-4 p-3 m-auto">
        <form method="POST">
            <h2 class="text-center p-3">Modificar Vehículo</h2>
            <?php
            include "../controller/cont_modificar.php"; 
            while($datos=$sql->fetch_object()){?>
                <div class="mb-3">
                <label for="inPutPlaca" class="form-label"><b>Placa</b></label>
                <input type="text" class="form-control" id="inPutPlaca" name="placa" value="<?= $datos->placa ?>">

            </div>
            <div class="mb-3">
                <label for="inOutMarca" class="form-label"><b>Marca</b></label>
                <input type="text" class="form-control" id="inOutMarca" name="marca" value="<?= $datos->marca ?>">
            </div>
            <div class="mb-3">
                <label for="inPutPlaca" class="form-label"><b>Modelo</b></label>
                <input type="text" class="form-control" id="inPutPlaca" name="modelo" value="<?= $datos->modelo ?>">

            </div>
            <div class="mb-3">
                <label for="inOutMarca" class="form-label"><b>Año</b></label>
                <input type="text" class="form-control" id="inOutMarca" name="anio" value="<?= $datos->anio ?>">
            </div>
            <div class="mb-3">
                <label for="inPutPlaca" class="form-label"><b>Color</b></label>
                <input type="text" class="form-control" id="inPutPlaca" name="color" value="<?= $datos->color ?>">

            </div>
            <?php
            }?>            
            <button type="submit" class="btn btn-primary" name="btnModificar" value="ok">Modificar</button>
            <a type="button" href="../index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
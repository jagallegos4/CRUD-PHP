<?php
//include("model/conexion.php");
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql=$conexion->query("delete from carros where placa='$id'");
    if ($sql==1) {
        # code...
        echo "<div class='alert alert-success'>EL vehiculo fue eliminado correctamente</div>";
    } else {
        # code...
        echo "<div class='alert alert-danger'>Error al eliminar el vehículo</div>";
    }
    

}
?>
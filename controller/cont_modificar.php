<?php
if (!empty($_POST["btnModificar"])) {
    if (!empty($_POST["placa"]) and !empty($_POST["marca"]) and !empty($_POST["modelo"]) and !empty($_POST["anio"]) and !empty($_POST["color"])) {
        $placa=$_POST["placa"];
        $marca=$_POST["marca"];
        $modelo=$_POST["modelo"];
        $anio=$_POST["anio"];
        $color=$_POST["color"];
        $sql=$conexion->query("update carros set placa ='$placa', marca='$marca', modelo='$modelo', anio='$anio', color='$color' where placa='$placa'");
        if ($sql==1) {
            header("location:../index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar el vehículo</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Campos Vacíos</div>";
    }
}
?>
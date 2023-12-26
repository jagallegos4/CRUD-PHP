<?php
if (!empty($_POST["btnRegistrar"])) {
    if (!empty($_POST["placa"]) and !empty($_POST["marca"]) and !empty($_POST["modelo"]) and !empty($_POST["anio"]) and !empty($_POST["color"])) 
    {
        $placa = $_POST["placa"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $anio = $_POST["anio"];
        $color = $_POST["color"];
        $sql = $conexion->query("insert into carros(placa,marca,modelo,anio,color)values('$placa','$marca','$modelo','$anio','$color')");
        if ($sql== 1) {
            echo'<div class="alert alert-success">Vehículo registrado exitosamente</div>';
        } else {
            echo'<div class="alert alert-danger">Error al registrar vehículo</div>';
        }
        
    }   
        else {
            echo'<div class="alert alert-waring">Alguno de los campos está vacío</div>';
        };
}

?>
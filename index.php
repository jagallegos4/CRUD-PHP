<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP y MySql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7aaabef60b.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">CRUD con PHP y MySql</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <form>
                    <h2 class="text-center p-3">Registro de vehículos</h2>
                    <div class="mb-3">
                        <label for="inPutPlaca" class="form-label">Placa</label>
                        <input type="text" class="form-control" id="inPutPlaca" name="placa">

                    </div>
                    <div class="mb-3">
                        <label for="inOutMarca" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="inOutMarca" name="marca">
                    </div>
                    <div class="mb-3">
                        <label for="inPutPlaca" class="form-label">Modelo</label>
                        <input type="text" class="form-control" id="inPutPlaca" name="placa">

                    </div>
                    <div class="mb-3">
                        <label for="inOutMarca" class="form-label">Año</label>
                        <input type="text" class="form-control" id="inOutMarca" name="anio">
                    </div>
                    <div class="mb-3">
                        <label for="inPutPlaca" class="form-label">Color</label>
                        <input type="text" class="form-control" id="inPutPlaca" name="color">

                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
            <div class="col-8">
                <table class="table">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">PLACA</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Año</th>
                            <th scope="col">Color</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("model/conexion.php");
                        $sql = $conexion->query("select * from carros");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr>
                                <th scope="row"><?= $datos->placa ?> </th>
                                <td><?= $datos->marca ?></td>
                                <td><?= $datos->modelo ?></td>
                                <td><?= $datos->anio ?></td>
                                <td><?= $datos->color ?></td>
                                <td><a href="" class="text-center btn btn-warning "><i class="fa-regular fa-pen-to-square"></i></a></td>
                                <td><a href="" class="text-center btn btn-danger "><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
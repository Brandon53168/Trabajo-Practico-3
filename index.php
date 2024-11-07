<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Practico 3 Brandon Agustin Haacker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="Listar" href="#">Listar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Agregar.php">Agregar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center p-4">Listado Digimon</h1>
    <div class="container-fliud p-8">
        <div class="col-8 ">
            <table class="table table-dark table-striped table">
                <?php
                include "Conexion.php";
                
                $sql = $conexion->query("select * from Digimon");

                ?>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Atributo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($datos = $sql->fetch_object()) { ?>
                        <tr>
                            <td scope="row"><?= $datos->ID ?></td>
                            <td scope="row"><?= $datos->Nombre ?></td>
                            <td ><img width="100" src="<?= $datos->Imagen ?>" alt="Error"></td>
                            <td scope="row"><?= $datos->Tipo ?></td>
                            <td scope="row"><?= $datos->Atributo ?></td>
                            <td>
                                <a href="Editar.php?ID=<?= $datos->ID ?>" class="btn btn-warning">Editar</a>
                                <a href="Eliminar.php?ID=<?= $datos->ID ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                    <?php }
                    ?>


                </tbody>
            </table>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <div class="Container container-center">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="Listar" href="index.php">Listar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Agregar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


  </div>
  <div class="Container">



    <div class="container">
      <h1>Agregar Digimon</h1>
      <?php
      include "./Conexion.php";
      include "./AgregarD.php";
      $sql = $conexion->query("select * from Digimon");

      ?>

      <form action="./AgregarD.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="Nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="Nombre" required>
        </div>

        <div class="mb-3">
          <label for="Imagen" class="form-label">Imagen</label>
          <input type="file" class="form-control" name="Imagen" required>
        </div>
        <div class="mb-3">
          <label for="Tipo" class="form-label">Tipo</label>
          <input type="text" class="form-control" name="Tipo" required>
        </div>
        <div class="mb-3">
          <label for="Atributo" class="form-label">Atributo</label>
          <input type="text" class="form-control" name="Atributo" required>
        </div>

        <button type="submit" class="btn btn-primary" name="Enviar" value="OK">Enviar</button>
      </form>


    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
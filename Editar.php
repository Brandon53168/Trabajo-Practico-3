<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
  <div>
  <?php
  include "Conexion.php";
  $ID = $_REQUEST['ID'];
  $sql = $conexion->query("SELECT * from Digimon WHERE ID = $ID");

  $datos = $sql->fetch_assoc();


  ?>
  <div class="container">
  <?php
  include "Conexion.php";
  $ID = $_REQUEST['ID'];
  $sql = $conexion->query("SELECT * from Digimon WHERE ID = $ID");

  $datos = $sql->fetch_assoc();


  ?>
    <h1>Editar Digimon</h1>

    <form action="EditarD.php?IDEditar=<?php echo $datos["ID"] ?>" method="$_POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="<?php echo $datos['Nombre'] ?>">
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Imagen</label>
        <input type="file" class="form-control" name="Imagen" value="<?php echo $datos['Imagen'] ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tipo</label>
        <input type="text" class="form-control" name="Tipo" value="<?php echo $datos['Tipo'] ?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Atributo</label>
        <input type="text" class="form-control" name="Atributo" value="<?php echo $datos['Atributo'] ?>">
      </div>
      <a href="index.php" class="btn btn-primary">Regresar</a>
      <button type="submit" class="btn btn-primary" name="Editar" value="ok">Enviar</button>

    </form>

  </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
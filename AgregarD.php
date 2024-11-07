<?php
include "./Conexion.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST["Enviar"])) {
    if (!empty($_POST["Nombre"]) && !empty($_FILES["Imagen"]) && !empty($_POST["Tipo"]) && !empty($_POST["Atributo"])) {
        $Nombre = $_POST["Nombre"];
        $Tipo = $_POST["Tipo"];
        $Atributo = $_POST["Atributo"];
        $Imagen = null; 

        
        if (isset($_FILES['Imagen']) && $_FILES['Imagen']['error'] == 0) {
            $Imagen = $_FILES['Imagen']['name'];
            $ImagenRuta = "Archivos/" . basename($Imagen); 

          
            if (move_uploaded_file($_FILES['Imagen']['tmp_name'], $ImagenRuta)) {
              
                $Imagen = $ImagenRuta;
            } else {
                echo "Error al subir la imagen.";
            }
        }


        // Insertar a la base de datos
        $sql = $conexion->query("INSERT INTO Digimon (Nombre, Imagen, Tipo, Atributo) VALUES ('$Nombre', '$Imagen', '$Tipo', '$Atributo')");

        // Ejecutar la consulta
        if ($sql) {
            header("Location: ./index.php"); // Redirigir a inicio
        } else {
            echo "<div class='alert alert-danger'>Error al registrar: " . $conexion->error . "</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Algunos campos están vacíos</div>";
    }
}

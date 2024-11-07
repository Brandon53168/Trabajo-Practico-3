<?php
include "Conexion.php";

if (!empty($_POST["Editar"])) {
    
        $ID = $_REQUEST['IDEditar'];

        $Nombre = $_POST["Nombre"];
        $Imagen = null;
        $Tipo = $_POST["Tipo"];
        $Atributo = $_POST["Atributo"];


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
        $sql = "UPDATE Digimon (Nombre, Imagen, Tipo, Atributo) SET ('$Nombre', '$Imagen', '$Tipo', '$Atributo') WHERE ID = $ID";

        // Ejecutar la consulta
        if ($sql = $conexion->query($sql) === TRUE) {
            header("Location:index.php"); // Redirigir a inicio
        } else {
            echo "<div class='alert alert-danger'>Error al registrar: " . $conexion->error . "</div>";
        }


}

?>
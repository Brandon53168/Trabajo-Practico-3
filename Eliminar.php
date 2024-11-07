<?php
include "Conexion.php";

$ID = $_REQUEST["ID"];

$sql = "DELETE FROM Digimon WHERE ID = $ID";

$datos = $conexion -> query($sql);
if ($datos ){
    header("Location: index.php");
} else {
    echo "No se puede borrar el dato";
}
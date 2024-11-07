<?php

$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';
$bd = 'DatosBaseTrabajo3';
$port = '3307';



$conexion = new mysqli($servidor, $usuario, $contrasena, $bd,$port);

if ($conexion->connect_error) {

    die($conexion->connect_error);
}

<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'test';

$con = mysqli_connect($host, $usuario, $contrasena, $base_datos);

if (!$con) {
    die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}
?>

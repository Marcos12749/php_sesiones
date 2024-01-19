<?php
session_start();
include_once 'datos.php';

if (!isset($_COOKIE['sesion_usuario']) || !isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<!-- ... (head y estilos) -->
<body>
<h1>Recursos</h1>
<p>Bienvenido, <?php echo $_SESSION['usuario']; ?>. Aquí están los archivos PDF:</p>

<ul>
    <li><a href="doc/archivo.pdf" target="_blank">Archivo 1</a></li>
    <li><a href="doc/archivo2.pdf" target="_blank">Archivo 2</a></li>
</ul>
</body>
</html>

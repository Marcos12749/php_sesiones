<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tailwind.css">
    <title>Mi Escuela</title>
</head>
<body>
<h1>Bienvenido a nuestra escuela</h1>
<?php
session_start();
if (isset($_SESSION['usuario'])) {
    echo '<p>¡Hola, ' . $_SESSION['usuario'] . '!</p>';
    echo '<a href="recursos.php">Acceder a recursos</a>';
} else {
    echo '<p><a href="login.php">Iniciar sesión</a> para acceder a recursos.</p>';
}
?>
</body>
</html>

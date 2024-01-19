<?php
global $con;
session_start();
include_once 'datos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Eliminar espacios en blanco alrededor del correo y la contraseña
    $correo = trim($_POST['correo']);
    $contraseña = trim($_POST['contrasena']);

    // Cifrar la contraseña usando MD5
    $contraseña_md5 = md5($contraseña);

    $query = "SELECT * FROM registro WHERE correo = '$correo' AND contraseña = '$contraseña_md5'";

    // Ejecutar la consulta y manejar errores
    $result = mysqli_query($con, $query);

    if (!$result) {
        die('Error en la consulta: ' . mysqli_error($con));
    }

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['usuario'] = $correo;
        header('Location: recursos.php');
    } else {
        echo '<p>Usuario o contraseña incorrectos. <a href="login.php">Intenta de nuevo</a></p>';
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<!-- ... (head y estilos) -->
<body>
<h1>Iniciar sesión</h1>
<form action="login.php" method="post">
    <label for="correo">Correo:</label>
    <input type="text" name="correo" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required>

    <button type="submit">Iniciar sesión</button>
</form>

<p>¿No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
</body>
</html>

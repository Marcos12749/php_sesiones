<?php
global $con;
include_once 'datos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Eliminar espacios en blanco alrededor del correo y la contraseña
    $correo = trim($_POST['correo']);
    $contraseña = trim($_POST['contrasena']);

    // Cifrar la contraseña usando MD5
    $contraseña_md5 = md5($contraseña);

    $query = "INSERT INTO registro (correo, contraseña) VALUES ('$correo', '$contraseña_md5')";

    // Ejecutar la consulta y manejar errores
    $result = mysqli_query($con, $query);

    if (!$result) {
        die('Error en la consulta: ' . mysqli_error($con));
    }

    echo '<p>Registro exitoso. <a href="login.php">Inicia sesión</a></p>';
}
?>


<!DOCTYPE html>
<html lang="es">
<!-- ... (head y estilos) -->
<body>
<h1>Regístrate</h1>
<form action="registro.php" method="post">
    <label for="correo">Correo:</label>
    <input type="text" name="correo" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required>

    <label for="confirmar_contrasena">Confirmar contraseña:</label>
    <input type="password" name="confirmar_contrasena" required>

    <label>
        <input type="checkbox" name="acepto_politica" required>
        Acepto la política
    </label>

    <button type="submit">Registrarse</button>
</form>

<p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
</body>
</html>

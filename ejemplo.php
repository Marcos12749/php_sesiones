<html>

<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <input type="email" name="correo">
    <input type="password" name="pass">
    <input type="submit" value="acceder">
</form>

<a href="privado.php">Zona  privada</a>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if($_POST['pass']=='123'){
        session_start();
    }
}
?>

</html>
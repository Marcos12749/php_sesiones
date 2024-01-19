<html>
<body>
<h3>cokies</h3>
<?php
setcookie("seguro", "ok",time()+3600,secure: true, httponly: true);
echo var_dump($_COOKIE);
setcookie("persistente","true",time()+30*24*60*60);
if (isset($_COOKIE['prueba'])){
    echo '<p>bienbendo de nuevo</p>';
}
else{
    echo '<p>vaya... la primera vez que vienes</p>';
    setcookie("prueba","value de la cookie");
}
?>
<h3>sesiones</h3>
<?php
session_start();
$_SESSION['info']="datos personales";
echo var_dump($_SESSION);
?>

</body>
</html>

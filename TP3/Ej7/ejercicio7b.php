<?php
session_start();
?>
<html>
<head>
<title>Ejercicio 7</title>
</head>
<body>
<?php
$usuario=$_POST['usuario'];
$pw=$_POST['pw'];
$_SESSION['usuario']=$usuario;
$_SESSION['pw']=$pw;
header("Location: ejercicio7c.php");
?>
</body>
</html>

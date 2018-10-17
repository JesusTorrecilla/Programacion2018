<?php
session_start();
?>
<html>
<head>
<title>Guardando datos</title>
</head>
<body>
<?php
$usuario=$_POST['usuario'];
$pw=$_POST['pw'];
$_SESSION['usuario']=$usuario;
$_SESSION['pw']=$pw;
unlink("registro.txt");
header("Location: ejercicio10c.php");
?>
</body>
</html>

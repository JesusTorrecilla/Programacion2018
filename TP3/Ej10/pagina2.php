<?php
session_start();
?>
<html>
<head>
<title>Pagina 2</title>
</head>
<body>
<?php
if (isset($_SESSION['usuario'])){;
?>
<a href="ejercicio10c.php">Pagina HOME</a><br>
<a href="pagina1.php">Pagina 1</a><br>
<a href="pagina3.php">Pagina 3</a><br>
<?php
echo "El nombre de usuario es {$_SESSION["usuario"]}";
$hora=date("G");
$minutos=date("i");
$segundos=date("s");
$tiempo=" ".$hora.":".$minutos.":".$segundos.";";
$dia=date("d");
$mes=date("m");
$anho=date("Y");
$fecha="" .$dia. "-" .$mes. "-" .$anho.";";
$script="pagina2.php";
$file=fopen("registro.txt","a");
fputs($file,$fecha);
fputs($file,$tiempo);
fputs($file,$script);
fputs($file,PHP_EOL);
}
else {
echo "Debe iniciar sesion para acceder a esta pagina";
}
?>
</body>
</html>

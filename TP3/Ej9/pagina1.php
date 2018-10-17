<?php
session_start();
?>
<html>
<head>
<title>Pagina 1</title>
</head>
<body>
<?php
if (isset($_SESSION['usuario'])){;
?>
<a href="ejercicio9c.php">Pagina HOME</a><br>
<a href="pagina2.php">Pagina 2</a><br>
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
$script="pagina1.php";
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

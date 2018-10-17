<?php
session_start();
?>
<html>
<head>
<title>Pagina 3</title>
</head>
<body>
<?php
if (isset($_SESSION['usuario'])){;
?>
<a href="ejercicio9c.php">Pagina HOME</a><br>
<a href="pagina1.php">Pagina 1</a><br>
<a href="pagina2.php">Pagina 2</a><br>
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
$script="pagina3.php";
$file=fopen("registro.txt","a");
fputs($file,$fecha);
fputs($file,$tiempo);
fputs($file,$script);
fputs($file,PHP_EOL);
echo "<br><br><a href=\"descarga.php\">Descargar archivo de registro</a>";
echo "<br><br>El contenido del archivo es el siguiente: <br><br>";
$archivo=fopen("registro.txt","r");
while ($fila=fgets($archivo)) {
  echo "$fila <br>";
}
}
else {
echo "Debe iniciar sesion para acceder a esta pagina";
}
?>
</body>
</html>

<?php
session_start();
?>
<html>
<head>
<title>Ejercicio 5</title>
</head>
<body>
<?php
$dato4=$_POST['dato4'];
$_SESSION['dato4']=$dato4;
$dato5=$_POST['dato5'];
$_SESSION['dato5']=$dato5;
$dato6=$_POST['dato6'];
$_SESSION['dato6']=$dato6;
echo "<form action=\"ejercicio5d.php\" method=\"POST\">";
echo "<label for=\"dato7\">Dato 7: </label>";
echo "<input type=\"text\" id=\"dato7\" name=\"dato7\"><br>";
echo "<label for=\"dato8\">Dato 8: </label>";
echo "<input type=\"text\" id=\"dato8\" name=\"dato8\"><br>";
echo "<label for=\"dato9\">Dato 9: </label>";
echo "<input type=\"text\" id=\"dato9\" name=\"dato9\"><br>";
echo "<input type=\"submit\" value=\"Enviar datos\"> ";
?>
</body>
</html>

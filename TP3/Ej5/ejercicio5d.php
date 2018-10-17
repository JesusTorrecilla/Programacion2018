<?php
session_start();
?>
<html>
<head>
<title>Ejercicio 5</title>
</head>
<body>
<?php
$dato7=$_POST['dato7'];
$_SESSION['dato7']=$dato7;
$dato8=$_POST['dato8'];
$_SESSION['dato8']=$dato8;
$dato9=$_POST['dato9'];
$_SESSION['dato9']=$dato9;
echo $_SESSION["dato1"];
echo $_SESSION["dato2"];
echo $_SESSION["dato3"];
echo $_SESSION["dato4"];
echo $_SESSION["dato5"];
echo $_SESSION["dato6"];
echo $_SESSION["dato7"];
echo $_SESSION["dato8"];
echo $_SESSION["dato9"];
?>
<br>
<br>
<a href="ejercicio5e.php">Link al cuarto script que mostrara las variables de sesion</a>
</body>
</html>

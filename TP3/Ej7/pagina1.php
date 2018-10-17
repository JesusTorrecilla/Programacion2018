<?php
session_start();
?>
<html>
<head>
<title>Pagina 1</title>
</head>
<body>
<a href="ejercicio7c.php">Pagina HOME</a><br>
<a href="pagina2.php">Pagina 2</a><br>
<a href="pagina3.php">Pagina 3</a><br>
<?php
echo "El nombre de usuario es {$_SESSION["usuario"]}";
?>
</body>
</html>

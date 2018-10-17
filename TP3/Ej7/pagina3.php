<?php
session_start();
?>
<html>
<head>
<title>Pagina 3</title>
</head>
<body>
<a href="ejercicio7c.php">Pagina HOME</a><br>
<a href="pagina1.php">Pagina 1</a><br>
<a href="pagina2.php">Pagina 2</a><br>
<?php
echo "El nombre de usuario es {$_SESSION["usuario"]}";
?>
</body>
</html>

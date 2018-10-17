<?php
session_start();
?>
<html>
<head>
<title>Pagina HOME</title>
</head>
<body>
<?php
echo "<h2> El nombre de usuario es {$_SESSION["usuario"]}</h2>";
?>
Links:<br>
<a href="pagina1.php">Pagina 1</a><br>
<a href="pagina2.php">Pagina 2</a><br>
<a href="pagina3.php">Pagina 3</a>
</body>
</html>

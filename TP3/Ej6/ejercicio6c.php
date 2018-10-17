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
</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
  </head>
  <body>
    <?php
    $valor=$_GET["valor"];
    ?>
    <form action="ejercicio7c.php" method="GET">
    <?php
    for ($x=1;$x<$valor+1;$x++){
    echo "<label for=\"dato$x\">Dato numerico $x: </label>";
    echo "<input type=\"text\" id=\"dato$x\" name=\"dato$x\"><br>";
    }
    ?>
    <input type="submit" value="Enviar datos">
  </body>
</html>

<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <?php
    $valor=$_GET['valor'];
    if ($valor<5) {
      for ($x=1;$x<6;$x++){
      echo "<label for=\"dato$x\">Dato numerico $x: </label>";
      echo "<input type=\"text\" name=\"dato$x\"><br>";
    }
  }
      else {
        for ($y=1;$y<$valor+1;$y++){
        echo "<label for=\"dato$y\">Dato numerico $y: </label>";
        echo "<input type=\"text\" id=\"dato$y\" name=\"dato$y\"><br>";
        }
      }

     ?>
  </body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <?php
    $dato1=$_POST['dato1'];
    $_SESSION['dato1']=$dato1;
    $dato2=$_POST['dato2'];
    $_SESSION['dato2']=$dato2;
    $dato3=$_POST['dato3'];
    $_SESSION['dato3']=$dato3;
    echo "<form action=\"ejercicio5c.php\" method=\"POST\">";
    echo "<label for=\"dato4\">Dato 4: </label>";
    echo "<input type=\"text\" id=\"dato4\" name=\"dato4\"><br>";
    echo "<label for=\"dato5\">Dato 5: </label>";
    echo "<input type=\"text\" id=\"dato5\" name=\"dato5\"><br>";
    echo "<label for=\"dato6\">Dato 6: </label>";
    echo "<input type=\"text\" id=\"dato6\" name=\"dato6\"><br>";
    echo "<input type=\"submit\" value=\"Enviar datos\"> ";
    ?>
  </body>
</html>

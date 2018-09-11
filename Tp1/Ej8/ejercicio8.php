<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 8</title>
  </head>
  <body>
    <table style="border: 1px solid black;">
    <?php
    $contador=0;
    for ($j=0;$j<5;$j++){
    echo "<tr>";
    for ($x=0;$x<5;$x++){
    echo "<td> $contador </td>";
    $contador++;
    }
    echo "</tr>";
    }
    ?>
    </table>
  </body>
</html>

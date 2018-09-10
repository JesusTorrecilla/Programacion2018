<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <?php
    $f=$_GET['filas'];
    $c=$_GET['columnas'];
    $num=0;
    echo "<table>";
    for($i=0;$i<$f;$i++){
      echo "<tr>";
      for($j=0;$j<$c;$j++){
        echo "<td>";
        echo "$num";
        $num++;
}
    }
     ?>
   </table>
  </body>
</html>

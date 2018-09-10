<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 12</title>
  </head>
  <body>
    <form action="ejercicio12b.php" method="POST">
    <?php
    $meses=array("January", "February", "March", "April", "June", "July", "August", "September", "October", "November", "December");
    $dia=date("j");
    $mes=date("F");
    $anho=date("Y");
    echo "Dia: ";
    echo "<select name=\"dia\">";
    echo "<option value=\"$dia\">$dia</option>";
    for ($i=1;$i<32;$i++) {
      if ($i==$dia) {
      }
      else{
      echo "<option value=\"$i\">$i</option>";
    }
    }
    echo "</select><br>";
    echo "Mes: ";
    echo "<select name=\"mes\">";
    echo "<option value=\"$mes\">$mes</option>";
    foreach ($meses as $valor) {
      if ($valor==$mes) {
      }
      else {
      echo "<option value=\"$valor\">$valor</option>";
    }
    }
    echo "</select><br>";
    echo "Anho: ";
    echo "<select name=\"anho\">";
    echo "<option value=\"$anho\">$anho</option>";
    for ($a=1900;$a<2101;$a++) {
      if ($a==$anho) {
      }
      else {
      echo "<option value=\"$a\">$a</option>";
    }
    }
    echo "</select><br>";
     ?>
     <input type="submit" value="Enviar">
  </body>
</html>

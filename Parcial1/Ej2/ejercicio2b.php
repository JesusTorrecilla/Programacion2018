<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php
    $meses=array("January", "February", "March", "April", "June", "July", "August", "September", "October", "November", "December");
    $dia=$_POST['dia'];
    $mes=$_POST['mes'];
    $anho=$_POST['anho'];
    $check1=$_POST['check1'];
    $string="$dia $mes $anho";
    if ($check1 == "on") {
      echo "hoy es el $dia de $mes de $anho";
      echo "<br><br>";
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
    }
    else {
      $newDate = date("d/m/y", strtotime($string));
      echo "hoy es el $newDate";
      echo "<br>";
      $arr=explode('/',$newDate);
      $dia=$arr[0];
      $mes=$arr[1];
      $anho=$arr[2];
      echo "<br><br>";
      echo "Dia: ";
      echo "<select name=\"dia\">";
      echo "<option value=\"$dia\">$dia</option>";
      for ($i=1;$i<32;$i++) {
        if ("0$i"==$dia) {
        }
        else{
          if ($i<10) {
            echo "<option value=\"$i\">0$i</option>";
          }
          else {
            echo "<option value=\"$i\">$i</option>";
          }
      }
      }
      echo "</select><br>";
      echo "Mes: ";
      echo "<select name=\"mes\">";
      echo "<option value=\"$mes\">$mes</option>";
      for ($j=1;$j<13;$j++) {
        if ("0$j"==$mes) {
        }
        else{
          if ($j<10) {
            echo "<option value=\"$j\">0$j</option>";
          }
          else {
            echo "<option value=\"$j\">$j</option>";
          }
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
          $arr2 = str_split($a, 2);
          $b=$arr2[1];
        echo "<option value=\"$b\">$b</option>";
      }
      }
      echo "</select><br>";

    }
     ?>

  </body>
</html>

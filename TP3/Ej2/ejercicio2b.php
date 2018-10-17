<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <table style="width:100%" border="1">
<?php
$a="0";
  $archivo=fopen($_FILES['arch']['tmp_name'],"r");
    while ($fila =fgets($archivo)) {
list ($id, $nombre, $apellido, $email, $observ) = explode(';', $fila);
      echo "<tr>";
      echo "<th>";
      echo $id;
      echo "</th>";
      echo "<th>";
      echo $nombre;
      echo "</th>";
      echo "<th>";
      echo $apellido;
      echo "</th>";
      echo "<th>";
      echo $email;
      echo "</th>";
      echo "<th>";
      echo $observ;
      echo "</th>";
      echo "</tr>";
      $a++;
      if($a>100){
        break;
      }

    }
?>

</table>
  </body>
</html>

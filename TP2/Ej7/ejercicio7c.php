<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
  </head>
  <body>
    <?php
    echo "Tabla: <br> ";
    foreach($_GET as $valor){
      echo "<table>";
      echo "<tr>";
      echo $valor;
      echo "</tr></table>";
    }
echo "<br>El valor maximo es: ";
echo max($_GET);
echo "<br>El valor minimo es: ";
echo min($_GET);
$contador=0;
$suma=0;
foreach ($_GET as $valor1){
$suma=$suma+$valor1;
$contador++;
}
$promedio=$suma/$contador;
echo "<br>El promedio del array es $promedio";
     ?>
  </body>
</html>

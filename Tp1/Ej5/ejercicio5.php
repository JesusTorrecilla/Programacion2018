<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <?php
    $hola=array();
    $jota= rand(5,15);
    for ($i=0;$i<$jota;$i++){
    $chau = rand(1,100);
    array_push($hola,$chau);
    }
    ?>
    Ejercicio a<BR><br>
    <?php
    echo "El arreglo tiene ";
    echo count($hola);
    echo " elementos";
    ?>
    <BR><br>
    Ejercicio b <BR><br>
    <?php
    foreach ($hola as $valor){
    echo "Los valores del array son: $valor <BR><br>";
    }
    ?>
    <BR><br>
    Ejercicio c <BR><br>
    <?php
    echo "El maximo valor del array es: ";
    echo max($hola);
    echo "<BR><br>";
    echo "El minimo valor del array es: ";
    echo min($hola);
    ?>
    <BR><br>
    Ejercicio d <BR><br>
    <?php
    $contador=0;
    foreach ($hola as $valor){
    $contador=$contador+$valor;
    }
    $promedio=$contador/$jota;
    echo "El promedio del arreglo es: $promedio <BR><br>";
    ?>
    <BR><br>
    Ejercicio e <BR><br>
    <?php
    if (in_array(20, $hola)){
    echo "El numero 20 esta en el arreglo";
    }
    else{
    echo "El numero 20 no esta en el arreglo";
    }
    ?>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
  </head>
  <body>
    <?php
    $arreglo = array();
    $cota=30000;
    $cota2=10;
    for ($i=0;$i<$cota;$i++){
    $numale = rand(1,30);
    array_push($arreglo,$numale);
    if (count($arreglo)>$cota2){
    if ($numale == 30){
    break;
    }
    }
    }
    foreach ($arreglo as $valor){
    echo "Los valores del arreglo son: $valor <BR><br>";
    }
    ?>
    <BR><br>
    Ejercicio a <BR><br>
    <?php
    sort($arreglo);
    foreach ($arreglo as $valor){
    echo "Los valores del arreglo ordenado son: $valor <BR><br>";
    }
    ?>
    <BR><br>
    Ejercicio b <BR><br>
    <?php
    $contador = count($arreglo);
    $contador2=$contador/2;
    $contador3=round($contador2,0, PHP_ROUND_HALF_UP);
    echo "Los valores del arreglo dividido en 2 son: <BR><br>";
    echo "<br><pre>";
    print_r (array_chunk($arreglo,$contador3));
    echo "</pre>";
    ?>
  </body>
</html>

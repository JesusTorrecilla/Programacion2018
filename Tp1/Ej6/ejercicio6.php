<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <?php
    $arreglo = array();
    for ($i=0; $i<16;$i++){
    $numale=rand(1,50);
    array_push($arreglo,$numale);
    }
    foreach ($arreglo as $valor){
    echo "Los valores del arreglo son: $valor <BR><br>";
    }
    ?>
    Ejercicio a <BR><br>
    <?php
    $segundoarreglo = array_unique($arreglo);
    foreach ($segundoarreglo as $valor){
    echo "Los valores del arreglo sin duplicados son: $valor <BR><br>";
    }
    ?>
  </body>
</html>

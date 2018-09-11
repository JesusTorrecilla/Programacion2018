<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 2</title>
  </head>
  <body>
    <?php
    echo "Ejercicio a: <br><br>";
    $arreglo[0]=1;
    $arreglo[1]=2;
    $arreglo[2]=3;
    foreach ($arreglo as $valor){
    echo "Valor del arreglo del ejercicio a: $valor <BR><br>";
    }
    echo "Ejercicio b: <br><br>";
    $arreglo2['uno']="Hola";
    $arreglo2['dos']="que";
    $arreglo2['tres']="tal";
    foreach ($arreglo2 as $valor1){
    echo "Valor del arreglo del ejercicio b:  $valor1 <BR><br>";
    }
    echo "Ejercicio c: <br><br>";
    $arreglo3[4][5][6]=2;
    $arreglo3[7][8][9]=3;
    $arreglo3[10][11][12]=4;
    foreach($arreglo3 as $valor){
    foreach($valor as $valor1){
    foreach($valor1 as $valor2){
    echo "Valor del arreglo del ejercicio c: $valor2<BR><br>";
    }
    }
    }
    echo "Ejercicio d: <br><br>";
    $arreglo4['holis']['holis2']="Hola";
    $arreglo4['holis3']['holis4']="que";
    $arreglo4['holis5']['holis6']="tal";
    foreach($arreglo4 as $valor){
    foreach($valor as $valor1){
    echo "Valor del arreglo del ejercicio d: $valor1<BR><br>";
    }
    }
     ?>
  </body>
</html>

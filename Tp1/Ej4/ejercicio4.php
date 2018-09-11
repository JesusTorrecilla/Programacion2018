<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    Ejercicio a<BR><br>
    <?php
    $string="1,2,3,4,5";
    echo "El valor del string es: $string <BR><br>";
    $arreglo = explode(",",$string);
    foreach($arreglo as $valor){
    echo "Valores del arreglo: $valor<BR><br>";
    }
    ?>
    <BR><br>
    Ejercicio b<BR><br>
    <?php
    $arreglo1[0]=1;
    $arreglo1[1]=2;
    $arreglo1[2]=3;
    foreach($arreglo1 as $valor){
    echo "Los valores del arreglo 1 son: $valor<BR><br>";
    }
    $string1=implode(",",$arreglo1);
    echo "El contenido del arreglo convertido a string es: $string1<BR><br>";
    ?>    
  </body>
</html>

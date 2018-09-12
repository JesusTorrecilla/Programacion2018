<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 10</title>
  </head>
  <body>
    <?php
    $arreglo2=array();
    $string = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16;17,18,19,20,21,22,23,24
    ,25,26,27,28";
    foreach(explode(';',$string) as $arr){
    $arreglo2[]=explode(',',$arr);
}
    echo "<br><pre>";
    print_r($arreglo2);
    echo "</pre>";
    echo "Tabla: ";
    echo "<table>";
    foreach($arreglo2 as $valor){
                echo "<tr>";
      foreach ($valor as $valor2) {

            echo "<td>$valor2 </td";

        }
        echo "</tr>";
      }
    echo "</table>";
    ?>
  </body>
</html>

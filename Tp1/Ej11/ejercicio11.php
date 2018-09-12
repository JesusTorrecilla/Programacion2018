<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="estilos.css" rel="stylesheet" type="text/css" />
    <title>Ejercicio 11</title>
  </head>
  <body>
    <?php
    $arreglo2=array();
    $string = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16;17,18,19,20,21,22,23,24
    ,25,26,27,28";
    foreach(explode(';',$string) as $arr){
    $arreglo2[]=explode(',',$arr);
}
    echo "Tabla: ";
    echo "<table>";
    foreach($arreglo2 as $valor){
                echo "<tr>";
      foreach ($valor as $valor2) {
        if ($valor2%2!==0) {
            echo "<td class=\"gris\">$valor2 </td>";
        }
        else{
          echo "<td class=\"amarillo\">$valor2 </td>";
        }
        }
        echo "</tr>";
      }
    echo "</table>";
    ?>
  </body>
</html>

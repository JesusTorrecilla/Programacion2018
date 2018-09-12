<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 9</title>
  </head>
  <body>
    <table>
    <?php
    for ($i="a";$i<"g";$i++){
    echo "<tr>";
    for ($j=0;$j<6;$j++){
    if ($i=="a" && $j==0){
    echo "<td> </td>";
    }
    elseif($j==0){
    echo "<td> $i </td>";
    }
    elseif($i=="a"){
    echo "<td> $j </td>";
    }
    else{
    echo " <td> $i$j </td>";
    }
    }
    echo "</tr>";
    }
    ?>
    <table>
  </body>
</html>

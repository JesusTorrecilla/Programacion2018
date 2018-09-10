<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <?php
    $dato1=$_GET['dato1'];
    $dato2=$_GET['dato2'];
    $dato3=$_GET['dato3'];
    if(isset($dato3)){
      echo "El dato 1 es $dato1 <br>";
      echo "El dato 2 es $dato2 <br>";
      echo "El dato 3 es $dato3 <br>";
    }
    elseif(isset($dato1)){
      echo "El dato 1 es $dato1 <br>";
    }
    else {
      echo "No se enviaron datos";
    }
     ?>
  </body>
</html>

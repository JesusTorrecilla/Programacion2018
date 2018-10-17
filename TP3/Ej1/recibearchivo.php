<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    Los datos del archivo son: <br>
    <?php
    print_r($_FILES);
     ?>
     <br>El contendio del archivo es: <br>
     <?php
     $archivo=fopen($_FILES['arch']['tmp_name'],"r");
     while ($fila=fgets($archivo)) {
       echo "$fila <br>";
     }
      ?>
  </body>
</html>

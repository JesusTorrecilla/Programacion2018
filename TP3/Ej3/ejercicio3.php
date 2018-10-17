<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <?php
    $nombre=$_FILES['arch']['name'];
    $archivo=$_FILES['arch']['tmp_name'];
    $ruta="importados/$nombre";
    copy($archivo,$ruta);
     ?>
     Copiado!<br>
     Lo que contiene el archivo de la carpeta "importados" es: <br>
     <?php
     $arch=fopen($ruta,"r");
     while ($fila=fgets($arch)) {
       echo "$fila <br>";
     }
      ?>


  </body>
</html>

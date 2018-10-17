<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <?php
    $nombre=$_FILES['arch']['name'];
    $archivo=$_FILES['arch']['tmp_name'];
    $ruta="importados/$nombre";
    copy($archivo,$ruta);
     ?>
     Copiado!<br>
     Las imagenes ya copiadas/subidas son: <br>
     <?php
     $imagenes=scandir("importados/",1);
      echo "<pre>";
      print_r($imagenes);
      echo "</pre>";
      echo "<h1>Imagenes</h1>";
      foreach ($imagenes as $imagen) {
      echo "<img src=\"importados/$imagen\"><br>";
      }
      ?>

  </body>
</html>

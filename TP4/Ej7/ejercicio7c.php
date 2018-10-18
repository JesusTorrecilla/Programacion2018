<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
  </head>
  <body>
    <?php
    if (isset($_SESSION['usuario'])){;
    echo "<h1>El nombre de usuario es {$_SESSION["usuario"]}</h1>";
    }
    else {
    echo "Debe iniciar sesion para acceder a esta pagina";
    header("Location: ejercicio7.php");
    }
    ?>

  </body>
</html>

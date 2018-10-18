<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
  </head>
  <body>
    <?php
    if ($_SESSION['login'] == '1'){
      echo "<h1>ADMINISTRADOR</h1><br><br>";
      echo "<h2>El nombre de usuario es {$_SESSION["usuario"]}</h2>";
    }
    else {
      header('Location: login.html');
     }
    ?>

  </body>
</html>

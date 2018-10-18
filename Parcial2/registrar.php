<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrar</title>
  </head>
  <body>
    <?php
    $usuario=$_POST['usuario'];
    $clave=$_POST['pw'];
    $hab="1";
    $u="usuario";
    $servidor="localhost";
    $base="programacion1";
    $user="phpmyadmin";
    $pw="phpmyadmin";
    $conex= new PDO("mysql:host=$servidor;dbname=$base",$user,$pw);
    $sql="INSERT into usuario (usuario, clave, habilitado, rol) values ('$usuario','$clave','$hab','$u')";
    $ejecucion=$conex->prepare($sql);
    $ejecucion->execute();
    header("Location: login.html");
    ?>

  </body>
</html>

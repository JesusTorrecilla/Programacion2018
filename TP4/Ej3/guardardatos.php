<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datos Ejercicio 3</title>
  </head>
  <body>
    <?php
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $doc=$_POST['doc'];
    $edad=$_POST['edad'];
    $servidor="localhost";
    $base="programacion1";
    $user="phpmyadmin";
    $pw="phpmyadmin";
    try{
    $conex= new PDO("mysql:host=$servidor;dbname=$base",$user,$pw);
     $sql="insert into persona (nombre, apellido, documento, edad) values ('$nombre','$apellido','$doc','$edad')";
    $ejecucion=$conex->prepare($sql);
    $ejecucion->execute();
    header("Location: ejercicio3.php");
  }
  catch(PDOException $e) {
    echo $e;
  }
     ?>

  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <?php
    $servidor="localhost";
    $base="programacion1";
    $user="phpmyadmin";
    $pw="phpmyadmin";
    try{
    $conex= new PDO("mysql:host=$servidor;dbname=$base",$user,$pw);
     $sql="insert into persona (nombre, apellido, documento, edad) values ('Pepe','Flores','39800204','20')";
    $ejecucion=$conex->prepare($sql);
    $ejecucion->execute();
    $sql="insert into persona (nombre, apellido, documento, edad) values ('Pepe','Hongo','39800205','21')";
    $ejecucion=$conex->prepare($sql);
    $ejecucion->execute();
    $sql="insert into persona (nombre, apellido, documento, edad) values ('Pepe','Plantas','39800206','22')";
    $ejecucion=$conex->prepare($sql);
    $ejecucion->execute(); 
  }
  catch(PDOException $e) {
    echo $e;
  }
     ?>
     <h2> Agregados </h2>

  </body>
</html>

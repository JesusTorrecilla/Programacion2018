<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <?php
    $servidor="localhost";
    $base="programacion1";
    $user="phpmyadmin";
    $pw="phpmyadmin";
    try{
    $conex= new PDO("mysql:host=$servidor;dbname=$base",$user,$pw);
    $sql="delete from persona where id= '{$_GET['id']}' ";
    $ejec=$conex->prepare($sql);
    $ejec->execute();
    header("Location: ejercicio4.php");
  }
  catch (PDOException $e){
    echo $e;
  }
     ?>

  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 5</title>
  </head>
  <body>
    <?php
    $servidor="localhost";
    $base="programacion1";
    $user="phpmyadmin";
    $pw="phpmyadmin";
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $doc=$_POST['doc'];
    $edad=$_POST['edad'];
    $id=$_POST['id'];
    echo "$nombre $apellido $doc $edad $id";
    try{
    $conex= new PDO("mysql:host=$servidor;dbname=$base",$user,$pw);
    $sql = "UPDATE persona SET nombre= :nombre, apellido= :apellido, documento= :documento, edad= :edad where id= :id ";
    $ejec=$conex->prepare($sql);
    $ejec->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $ejec->bindParam(':apellido', $apellido, PDO::PARAM_STR);
    $ejec->bindParam(':documento', $doc, PDO::PARAM_STR);
    $ejec->bindParam(':edad', $edad, PDO::PARAM_INT);
    $ejec->bindParam(':id', $id, PDO::PARAM_INT);
    $ejec->execute();
    header("Location: ejercicio5.php");
  }
  catch (PDOException $e){
    echo $e;
  }
     ?>

  </body>
</html>

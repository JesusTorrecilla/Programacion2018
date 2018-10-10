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
    try{
    $conex= new PDO("mysql:host=$servidor;dbname=$base",$user,$pw);
    $sql="select * from persona where id= '{$_GET['id']}' ";
    $ejec=$conex->prepare($sql);
    $ejec->execute();
    while($fila=$ejec->fetch(PDO::FETCH_ASSOC)){
      echo "Los datos son: ";
      foreach ($fila as $campo) {
        echo "$campo <br>";
      }
      $a=$fila['nombre'];
      $b=$fila['apellido'];
      $c=$fila['documento'];
      $d=$fila['edad'];
      $e=$fila['id'];
    }
    echo "<br><br>Ingrese los nuevos datos: <br>";
    echo "<form action=\"edicion2.php\" method=\"POST\">";
    echo "Nombre: ";
    echo "<input type=\"text\" value=\"$a\" name=\"nombre\"><br>";
    echo "Apellido: ";
    echo "<input type=\"text\" value=\"$b\" name=\"apellido\"><br>";
    echo "Documento: ";
    echo "<input type=\"text\" value=\"$c\" name=\"doc\"><br>";
    echo "Edad: ";
    echo "<input type=\"text\" value=\"$d\" name=\"edad\"><br>";
    echo "<input type=\"hidden\" value=\"$e\" name=\"id\">";
    echo "<input type=\"submit\" value=\"Enviar nuevos datos\">";
  }
  catch (PDOException $e){
    echo $e;
  }
     ?>

  </body>
</html>

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
    $sql="select * from persona";
    $ejec=$conex->prepare($sql);
    $ejec->execute();
    echo "Datos: <br>";
    echo "<table border='1'>";
    echo "<tbody>";
    while($fila=$ejec->fetch(PDO::FETCH_ASSOC)){
      echo "<tr>";
      foreach ($fila as $campo) {
        echo "<td>";
        echo "$campo";
        echo "</td>";
      }
      $a=$fila['id'];
      echo "<td><a href=\"borrado.php?id=$a\">Borrar Persona</a></td>";
      echo "<td><a href=\"edicion.php?id=$a\">Editar Registro</a></td>";
      echo "</tr>";
      $a++;
    }
    echo "</tbody>";
    echo "</table>";
  }
  catch (PDOException $e){
    echo $e;
  }
     ?>

  </body>
</html>

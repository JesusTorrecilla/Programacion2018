<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 6</title>
  </head>
  <body>
    <?php
    $servidor="localhost";
    $base="programacion1";
    $user="phpmyadmin";
    $pw="phpmyadmin";
    try{
    $conex= new PDO("mysql:host=$servidor;dbname=$base",$user,$pw);
    $sql="select	nombre,	apellido	as	Apellido,	concat(apellido,',	',	nombre)	as	nombreCompleto	from	persona";
    $ejec=$conex->prepare($sql);
    $ejec->execute();
    echo "<table border=\"1\" ";
    while ($fila = $ejec->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr>";
  foreach ($fila as $x => $x_value) {
    echo "$x   ";
    echo "<td>$x_value</td>";
  }
  echo "<br>";
  echo "</tr>";
}
echo "</table>";

  }
  catch (PDOException $e){
    echo $e;
  }
     ?>

  </body>
</html>

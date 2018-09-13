<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <?php
    $arr=array(
    "Usuario1"=>array('Nombre'=>"Lucas", 'Pw' => "123", 'Email' => "lucas123@gmail.com"),
    "Usuario2"=>array('Nombre'=>"Pedro", 'Pw' => "456", 'Email' => "pedro456@gmail.com"),
    "Usuario3"=>array('Nombre'=>"Sergio", 'Pw' => "789", 'Email' => "sergio789@gmail.com"),
    "Usuario4"=>array('Nombre'=>"Geronimo", 'Pw' => "101112", 'Email' => "geronimo101112@gmail.com"));
    $nombre=$_POST['nombre'];
    $pw=$_POST['pw'];
    foreach ($arr as $clave => $clave2) {
      if ($clave2['Nombre'] == $nombre && $clave2['Pw'] == $pw) {
        echo "Usuario validado<br>";
        echo "Nombre: ";
        echo $clave2['Nombre'];
        echo "<br>Contrasenha: ";
        echo $clave2['Pw'];
        echo "<br>Email: ";
        echo $clave2['Email'];
      }
    }
     ?>
  </body>
</html>

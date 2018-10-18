<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 7</title>
  </head>
  <body>
    <?php
    $usuario=$_POST['usuario'];
    $clave=$_POST['pw'];
    $servidor="localhost";
    $base="programacion1";
    $user="phpmyadmin";
    $pw="phpmyadmin";
    $conex= new PDO("mysql:host=$servidor;dbname=$base",$user,$pw);
    $datos= array('usuario'=>$usuario,'clave' => $clave);
    $sql="SELECT * FROM usuario WHERE usuario= :usuario AND clave= :clave";
    $ejec=$conex->prepare($sql);
    $ejec->execute($datos);

     if($fila=$ejec->fetch(PDO::FETCH_ASSOC)){
              $_SESSION['usuario'] = $usuario;
              $_SESSION['login'] = 1;
              echo "si";
              header('Location: ejercicio7c.php');
    }
    else{
       header('Location: ejercicio7.php');
    }
     ?>
  </body>
</html>

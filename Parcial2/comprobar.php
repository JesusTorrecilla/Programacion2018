<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comprobacion</title>
  </head>
  <body>
    <?php
    $usuario=$_POST['usuario'];
    $clave=$_POST['pw'];
    $hab="1";
    $servidor="localhost";
    $base="programacion1";
    $user="phpmyadmin";
    $pw="phpmyadmin";
    $conex= new PDO("mysql:host=$servidor;dbname=$base",$user,$pw);
    $datos= array('usuario'=>$usuario,'clave' => $clave, 'habilitado'=>$hab);
    $sql="SELECT * FROM usuario WHERE usuario= :usuario AND clave= :clave AND habilitado= :habilitado";
    $ejec=$conex->prepare($sql);
    $ejec->execute($datos);

     if($fila=$ejec->fetch(PDO::FETCH_ASSOC)){
              $_SESSION['usuario'] = $usuario;
              if($fila['rol'] == "admin"){
                echo "Es admin";
                $_SESSION['login'] = 1;
                header('Location: admin.php');
              }
              else {
                echo "Es user";
                $_SESSION['login'] = 2;
                header('Location: usuario.php');
              }
    }
    else{
      echo "No esta habilitado";
      header('Location: login.html');
    }
     ?>
  </body>
</html>

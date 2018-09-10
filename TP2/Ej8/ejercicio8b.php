<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 8</title>
  </head>
  <body>
    <?php
    $a=$_GET["texto1"];
    $b=$_GET["texto2"];
    $c=$_GET["oculto"];
    $d=$_GET["clave"];
    $e=$_GET["check1"];
    $f=$_GET["check2"];
    $g=$_GET["check3"];
    $h=$_GET["grupo1"];
    $i=$_GET["grupo2"];
    $j=$_GET["lista"];
    ?>
    <form action="/TrabajoPractico2/ejercicio8c.php" method="GET">
    <label for="texto1">Texto1: </label>
    <?php
    echo "<input type=\"text\" id=\"texto1\" name=\"texto1\" value=\"$a\"><br>";
    ?>
    <label for="texto2">Texto2: </label>
    <?php
    echo "<input type=\"text\" id=\"texto2\" name=\"texto2\" value=\"$b\"><br>";
    ?>
    <label for="oculto">Oculto: </label>
    <?php
    echo "<input type=\"hidden\" id=\"oculto\" name=\"oculto\" value=\"$c\"><br>";
    ?>
    <label for="clave">Clave: </label>
    <?php
    echo "<input type=\"password\" id=\"clave\" name=\"clave\" value=\"$d\"><br>"
    ?>
    <label for="check1">Check1: </label>
    <?php
    if($e==on){
    echo "<input type=\"checkbox\" id=\"check1\" name=\"check1\" checked><br>";
    }
    else{
    echo "<input type=\"checkbox\" id=\"check1\" name=\"check1\"><br>";
    }
    ?>
    <label for="check2">Check2: </label>
    <?php
    if($f==on){
    echo "<input type=\"checkbox\" id=\"check2\" name=\"check2\" checked><br>";
    }
    else{
    echo "<input type=\"checkbox\" id=\"check2\" name=\"check2\"><br>";
    }
    ?>
    <label for="check3">Check3: </label>
    <?php
    if($g==on){
    echo "<input type=\"checkbox\" id=\"check3\" name=\"check3\" checked><br>";
    }
    else{
    echo "<input type=\"checkbox\" id=\"check3\" name=\"check3\"><br>";
    }
    ?>
    <label for="grupo1">Grupo1: </label>
    <?php
    if($h == "El Primero"){
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Primero\" checked>";
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Segundo\">";
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Tercero\"><br>";
    }
    elseif($h == "El Segundo"){
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Primero\">";
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Segundo\" checked>";
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Tercero\"><br>";
    }
    elseif($h == "El Tercero"){
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Primero\">";
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Segundo\">";
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Tercero\" checked><br>";
    }
    else{
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Primero\">";
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Segundo\">";
    echo "<input type=\"radio\" id=\"grupo1\" name=\"grupo1\" value=\"El Tercero\"><br>";
    }
    ?>
    <label for="grupo2">Grupo2: </label>
    <?php
    if($i == "El Primero"){
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Primero\" checked>";
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Segundo\">";
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Tercero\"><br>";
    }
    elseif($i == "El Segundo"){
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Primero\">";
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Segundo\" checked>";
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Tercero\"><br>";
    }
    elseif($i == "El Tercero"){
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Primero\">";
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Segundo\">";
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Tercero\" checked><br>";
    }
    else{
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Primero\">";
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Segundo\">";
    echo "<input type=\"radio\" id=\"grupo2\" name=\"grupo2\" value=\"El Tercero\"><br>";
    }
    ?>
    <label for="lista">Lista: </label>
    <select name="lista">
    <?php
    if($j == "A"){
    echo "<option>A</option>";
    echo "<option>B</option>";
    echo "<option>C</option>";
    echo "<option>D</option>";
    }
    elseif($j == "B"){
    echo "<option>B</option>";
    echo "<option>A</option>";
    echo "<option>C</option>";
    echo "<option>D</option>";
    }
    elseif($j == "C"){
    echo "<option>C</option>";
    echo "<option>A</option>";
    echo "<option>B</option>";
    echo "<option>D</option>";
    }
    else{
    echo "<option>D</option>";
    echo "<option>A</option>";
    echo "<option>B</option>";
    echo "<option>C</option>";
    }
    ?>
    </select><br>
    <input type="submit" value="Enviar">
    </form>
  </body>
</html>

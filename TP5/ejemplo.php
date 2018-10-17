<?php //TIENE QUE ESTAR PEGADO AL MARGEN!!!!!!!!!!!!!!!!!!!!!!!!
    $ancho=400;
    $alto=500;
    $imagen = imagecreate($ancho,$alto);
    //Primero se define el color de fondo
    $color_fondo = imagecolorallocate($imagen, 100, 255, 100);

    header("Content-type: image/png");
    imagepng($imagen);
?>

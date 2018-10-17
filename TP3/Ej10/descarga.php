<?php
header("Content-disposition: attachment; filename=registro.txt");
header("Content-type: text/plain");
readfile("registro.txt");
?>

<?php
// tablou indexat automat - indexul porneste de la 0
$marca = array("Audi", "BMW", "Toyota", "Renault");
var_dump($marca);
// tablou indexat manual
$marca[0] = "Audi";
$marca[1] = "BMW";
$marca[2] = "Toyota";
$marca[3] = "Renault";
var_dump($marca);
echo "Marci preferate: " . $marca[0] . ", " . $marca[1] . ", " . $marca[2] . " si
" . $marca[3] . ".";
?>
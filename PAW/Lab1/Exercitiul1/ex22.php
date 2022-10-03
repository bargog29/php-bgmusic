<?php
// ciclu infinit do..while
$factor=2;
$limita_minima=100;
$i=5; //se termina la a doua structura if
//$i=0; // se termina la prima structura if
$i=5;
do {
if ($i < 5) {
	echo "Variabila i nu este suficient de mare";
	break;
}
$i *= $factor;
if ($i > $limita_minima) 
{
	echo "<br/>i=",$i," i este prea mare!.. >",$limita_minima;
	break;
}
echo "<br/>i=",$i," Variabila i este O.K.!"; /* proceseaza i */
} while (1);
?>

<?php
$a=10;
function mihai() {
global $a; //declaram variabila $a de tip global
echo "Mihai are ".$a." ani";
}
mihai();
?> 
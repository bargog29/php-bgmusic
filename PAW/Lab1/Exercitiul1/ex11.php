<?php
//Operatori de asignare "=" sau "+="
$a = ($b = 4) + 5; // $a este egal cu 9 si $b a fost setat la 4.
echo "a=",$a," ","b=",$b;
$a = 3;
$a += 5; // seteaza $a la 8, ca si in expresia: $a = $a + 5;
$b = "Salut ";
$b .= "PHP!"; // seteaza $b la "Salut PHP!", ca si in $b = $b . "PHP!";
echo " a=",$a,"<br />","b=",$b;
?>

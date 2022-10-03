<?php
// Generarea/afişarea secvenţei de numere 1..10
echo "<br/> Exemplul 1 : ";
for ($i = 1; $i <= 10; $i++) {
echo $i," ";
}
echo "<br/> Exemplul 2 : ";
for ($i = 1; ; $i++) {
if ($i > 10) { break; }
echo $i," ";
}
echo "<br/> Exemplul 3 : ";
$i = 1;
for (; ; ) {
if ($i > 10) { break; }
echo $i," ";
$i++;
}
echo "<br/> Exemplul 4 : ";
for ($i = 1; $i <= 10; $i++):
echo $i, " ";
endfor;
?>

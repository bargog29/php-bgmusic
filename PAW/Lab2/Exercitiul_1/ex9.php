<?php
/* foreach exemplul 1: numai value
echo "<br/>Exemplul-1<br/>";
$a = array(2, 4, 6, 8);
foreach ($a as $v) {
echo "Valoarea curenta a lui $a: $v <br/>";
}
/* foreach exemplul 2: value (cu afisarea key pentru ilustrare) */
echo "<br/>Exemplul-2<br/>";
$a = array(20, 40, 60, 80);
$i = 0; /* numai pentru ilustrare */
foreach ($a as $v) {
echo "$a[$i] => $v<br/>";
$i++;
}
/* foreach exemplul 3: key si value */
echo "<br/>Exemplul-3<br/>";
$a = array(
"one" => 200,
"two" => 400,
"three" => 600,
"seventeen" => 800
);
foreach ($a as $k => $v) {
echo "$a[$k] => $v<br/>";
}
/* foreach exemplul 4: array multi-dimensional */
echo "<br/>Exemplul-4<br/>";
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";
foreach ($a as $v1) {
foreach ($v1 as $v2) {
echo "$v2<br/>";
}
}
/* foreach exemplul 5: array-uri dinamice */
echo "<br/>Exemplul-5<br/>";
foreach (array(10, 20, 30, 40, 50) as $v) {
echo "$v<br/>";
}
?>
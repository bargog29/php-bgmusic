<?php
// Utilizarea structurii repetitive „foreach”-s1 şi echivalentul ei „while”
$arr = array("one", "two", "three");
reset ($arr);
while (list(, $value) = each ($arr)) {
echo "Valoare cu while: $value<br />";
}
foreach ($arr as $value) {
echo "Valoare cu foreach: $value<br />";
}
?>
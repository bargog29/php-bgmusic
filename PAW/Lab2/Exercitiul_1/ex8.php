<?php
// Utilizarea structurii repetitive foreach si echivalentul ei while
$arr = array("one", "two", "three");
reset($arr);
while (list($key, $value) = each ($arr)) {
echo "Index-while: $key; Valoare-while: $value<br />";
}
foreach ($arr as $key => $value) {
echo "Index-foreach: $key; Valoare-foreach: $value<br />”;
}
?>

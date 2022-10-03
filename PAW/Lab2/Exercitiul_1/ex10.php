<?php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
echo "<br />Exemplu break pentru while<br />";
while (list (, $val) = each ($arr)) {
if ($val == 'stop') {
break; /* Se poate scrie de asemenea si 'break 1;' aici. */
}
echo "$val<br />";
}
/* Utilizarea argumentului optional. */
echo "<br />Exemplu break pentru switch<br />";
$i = 0;
while (++$i) {
switch ($i) {
case 5:
echo "Break la 5<br />";
break 1; /* Iesirea numai din switch. */
case 10:
echo "Break la 10; Abandonare!<br />";
break 2; /* Iesirea si din switch si din while. */
default:
break;
}
}
?>
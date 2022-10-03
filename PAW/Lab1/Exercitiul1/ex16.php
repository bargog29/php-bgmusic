<?php
//Structura conditionala if..elseif si echivalentul ei switch..case
$i=0;
echo "STRUCTURA CONDITIONALA if..elseif<br />";
if ($i == 0) {
echo "i este egal cu 0";
} elseif ($i == 1) {
echo "i este egal cu 1";
} elseif ($i == 2) {
echo "i este egal cu 2";
}
echo "<br /><br />STRUCTURA CONDITIONALA switch..case<br />";
switch ($i) {
case 0:
 echo "i este egal cu 0";
 break;
case 1:
 echo "i este egal cu 1";
 break;
case 2:
 echo "i este egal cu 2";
 break;
}
?>

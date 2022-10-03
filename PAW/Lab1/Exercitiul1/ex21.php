<?php
/* exemplul 1 */
$i = 1;
while ($i <= 10) {
echo $i++," ";/*(post-increment) se afiseaza $i inainte de incrementare*/
}
/* exemplul 2 */
echo "<br/>";
$i = 1;
while ($i <= 10):
echo $i, " ";
$i++;
endwhile;
?>

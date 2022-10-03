<?php
function static1() {
static $a=0;
echo $a;
$a++;
}
static1();
echo "<br>";
static1();
echo "<br>";
static1();
?> 
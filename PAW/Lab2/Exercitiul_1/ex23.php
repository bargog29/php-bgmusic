<?php
function foo() {
echo "In foo()<br />\n";
}
function bar($arg = '') {
echo "In bar(); argumentul era '$arg'.<br />\n";
}
// Aceasta este o functie derulanta in jurul lui echo
function echoit($string) {
echo $string;
}
$func = 'foo';
$func(); // Aceasta apeleaza foo()
$func = 'bar';
$func('test'); // Aceasta apeleaza bar()
$func = 'echoit';
$func('test'); // Aceasta apeleaza echoit()
?>

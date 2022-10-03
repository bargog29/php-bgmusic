<?php
$conn = new PDO('sqlite:/home/lynn/music.sql3');
/* Dangerous string */
$string = 'Naughty \' string';
print "Unquoted string: $string\n";
print "Quoted string:" . $conn->quote($string) . "\n";
?>

<?php
$conn = new PDO('sqlite:/home/lynn/music.sql3');
/* Simple string */
$string = 'Nice';
print "Unquoted string: $string\n";
print "Quoted string: " . $conn->quote($string) . "\n";
?>

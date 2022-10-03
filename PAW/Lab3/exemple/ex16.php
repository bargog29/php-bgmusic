<?php
class ClassaCuDestructor {
 function __construct() {
 print "Sunt în constructor.\n";
 $this->name = "ClassaCuDestructor";
 }
 function __destruct() {
 print "Distrug " . $this->name . "\n";
 }
}
$obj = new ClassaCuDestructor();
?>
<?php
class Foo {
 public static function aStaticMethod() {
 // ...
echo 'aStaticMethod';
 }
}
Foo::aStaticMethod();
$classname = 'Foo';
$classname::aStaticMethod(); // As of PHP 5.3.0
?>

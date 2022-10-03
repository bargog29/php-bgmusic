<?php
class Foo {
 // As of PHP 7.1.0
 public const BAR = 'bar';
 private const BAZ = 'baz';
}
echo Foo::BAR, PHP_EOL;
echo Foo::BAZ, PHP_EOL;
?>
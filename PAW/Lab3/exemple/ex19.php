<?php
class Test
{
 private $foo;
 public function __construct($foo)
 {
 $this->foo = $foo;
 }
 private function bar()
 {
 echo 'S-a accesat metoda privată.';
 }
 public function baz(Test $other)
 {
 // Putem modifica proprietatea privată:
 $other->foo = 'salut';
 var_dump($other->foo);
 // Putem de asemenea apela metoda privată:
 $other->bar();
 }
}
$test = new Test('test');
$test->baz(new Test('other'));
?>

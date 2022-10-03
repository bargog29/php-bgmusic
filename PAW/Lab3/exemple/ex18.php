<?php
/**
* Definește MyClass
*/
class MyClass
{
 // Declară un constructor public
 public function __construct() { }
 // Declară o metodă publică
 public function MyPublic() { }
 // Declară o metodă protected
 protected function MyProtected() { }
 // Declară o metodă private
 private function MyPrivate() { }
 // Aceasta este public
 function Foo()
 {
 $this->MyPublic();
 $this->MyProtected();
 $this->MyPrivate();
 }
}
$myclass = new MyClass();
$myclass->MyPublic(); // Funcționează
$myclass->MyProtected(); // Eroare fatală
$myclass->MyPrivate(); // Eroare fatală
$myclass->Foo(); // Cele Public, Protected și Private funcționează
/**
* Definește MyClass2
*/
class MyClass2 extends MyClass
{
 // Aceasta este public
 function Foo2()
 {
 $this->MyPublic();
 $this->MyProtected();
 $this->MyPrivate(); // Eroare fatală
 }
}
$myclass2 = new MyClass2;
$myclass2->MyPublic(); // Funcționează
$myclass2->Foo2(); // Public și Protected funcționează, dar nu și Private
class Bar
{
 public function test() {
 $this->testPrivate();
 $this->testPublic();
 }
 public function testPublic() {
 echo "Bar::testPublic\n";
 }
 private function testPrivate() {
 echo "Bar::testPrivate\n";
 }
}
class Foo extends Bar
{
 public function testPublic() {
 echo "Foo::testPublic\n";
 }
 private function testPrivate() {
 echo "Foo::testPrivate\n";
 }
}
$myFoo = new Foo();
$myFoo->test(); // Bar::testPrivate
 // Foo::testPublic
?>

<?php
class Foo
{
function Variabile()
{
$name = 'Bar';
$this->$name(); // Aceasta apeleaza metoda Bar()
}
function Bar()
{
echo "This is Bar";
}
}
$foo = new Foo();
$funcname = "Variabile";
$foo->$funcname(); // Aceasta apeleaza metoda $foo->Variabile()
?>
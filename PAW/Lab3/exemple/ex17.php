<?php
/**
* Definire ClassaMea
*/
class ClasaMea
{
 public $membru_public = 'Eu sunt: Public';
 protected $membru_protected = 'Eu sunt: Protected';
 private $membru_private = 'Eu sunt: Private';
 function afiseazaBunaZiua()
 {
 echo $this->membru_public . ", ";
 echo $this->membru_protected . ", ";
 echo $this->membru_private;
 }
}
$obj = new ClasaMea();
echo $obj->membru_public; // Funcționează
echo $obj->membru_protected; // Eroare fatală
echo $obj->membru_private; // Eroare fatală
$obj->afiseazaBunaZiua(); // Afișează Eu sunt: Public, Eu sunt: Protected, Eu
sunt: Private
/**
* Define ClasaMea2
*/
class ClassaMea2 extends ClassaMea
{
 // Putem redeclara metodele publice și protected, dar nu și pe cele private
 protected $membru_protected = 'Eu sunt: Protected2';
 function afiseazaBunaZiua()
 {
 echo $this->membru_public . ",";
 echo $this->membru_protected;
 echo $this->membru_private;
 }
}
$obj2 = new ClasaMea2();
echo $obj->membru_public; // Funcționează
echo $obj2->membru_protected; // Eroare fatală
echo $obj2->membru_private; // Nedefinit
$obj2->afiseazaBunaZiua(); // Afișează Eu sunt: Public, Eu sunt: Protected2
?>

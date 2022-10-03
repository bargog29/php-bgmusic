<?php
class Catalog {
/* Nici una din acestea nu vor functiona in PHP 4. */
var $data_curenta = date("Y-m-d");
var $nume = $prenume;
var $proprietar = 'Ion ' . 'Georgescu ';
/* Array-uri care contin valori constant vor merge totusi. */
var $items = array("VCR", "TV");
}
/* Acesta este modul corect de definire in PHP 4. */
class Catalog {
var $data_curenta;
var $nume;
var $proprietar;
var $items = array("VCR", "TV");
function Catalog () {
$this->data_curenta = date("Y-m-d");
$this->nume = $GLOBALS['prenume'];
/* etc. . . */
}
}
?>
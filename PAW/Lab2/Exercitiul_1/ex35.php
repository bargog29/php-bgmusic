<?php
class Catalog {
var $items; // Articole din catalogul magazinul nostru
// Aduna $num articole la $artnr din catalogul nostru
function add_item($artnr, $num) {
$this->items[$artnr] += $num;
}
// Extrage $num articole din $artnr din catalogul nostru
function remove_item($artnr, $num) {
if ($this->items[$artnr] > $num) {
$this->items[$artnr] -= $num;
return true;
} else {
return false;
}
}
}
?>
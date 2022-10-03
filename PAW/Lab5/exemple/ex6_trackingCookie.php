<?php
//se verifica daca cookie-ul exista deja si se preiau numarul de vizite stocat
$numarvizite = 0;
if( isset( $_COOKIE[ 'cnrvizite' ] ) ) {
    $numarvizite = $_COOKIE[ 'cnrvizite' ];
}
// se creste numarul vizitelor cu o unitate
$numarvizite = $numarvizite + 1;
// se actualizeaza (sau seteaza) cookie-ul ce va retine nr de vizite
setcookie( ' cnrvizite ', $numarvizite, time() + 60 * 60 * 24 * 365);
// va expira peste un an
// se afiseaza un mesaj corespunzator
if( $numarvizite == 1 ) {
    echo "Bun venit! Este prima vizita! ";
} else {
    echo "Bine ai revenit. Ai vizitat de $numarvizite ori site-ul.";
}
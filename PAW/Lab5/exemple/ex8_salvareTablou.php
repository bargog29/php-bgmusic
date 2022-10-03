<?php
session_start();
// inregistrarea datelor in sesiune
$_SESSION[ 'text' ] = 'Mesaj persistent';
// citirea din sesiune
echo $_SESSION[ 'text' ];
// pe sesiune se pot inregistra aproape orice tipuri de date
$vector = array('a', 'b', 'c');
$_SESSION[ 'litere' ] = $vector;
// accesez o parte din vectorul stocat
echo $_SESSION[ 'litere' ][0]; // afiseaza a
echo $_SESSION[ 'litere' ][2]; // afiseaza c
<?php
$continut = file_get_contents( 'fisier.txt' );
$continut = $continut . ' -- Text adaugat de PHP';
file_put_contents( 'fisier2.txt', $continut );
file_put_contents( 'fisier3.txt', '11' );

$linii = file( 'fisier4.txt' );
echo 'Linia a 3a din fisier este: ', $linii[ 2 ];
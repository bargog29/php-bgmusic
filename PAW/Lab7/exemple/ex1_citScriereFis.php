<?php
$id_fisier = fopen("c:\\exemple\\unu.txt", 'r');
fread( $id_fisier, 10 );
fclose($id_fisier);

$id_fisier = fopen("c:\\exemple\\unu.txt", 'w');
fwrite( $id_fisier, 'Text nou in fisier' );
fclose($id_fisier);
$id_fisier = fopen("c:\\exemple\\unu.txt", 'a');
fwrite( $id_fisier, 'Text adaugat in fisier' );
fclose($id_fisier);
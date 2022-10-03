<?php
echo file_exists( 'fisier.txt' );
copy( 'sursa.txt', 'destinatie.txt' );
unlink( 'fisier.txt' );
rename( 'vechi.txt', 'nou.txt' );
echo basename( "c:\\cale\\catre\\fisier.txt" );
echo dirname( "c:\\cale\\catre\\fisier.txt" );
echo filesize( 'fisier.txt' );
echo is_file( "c:\\cale\\catre\\fisier.txt" );
echo is_readable( 'fisier.txt' );
echo is_writable( 'fisier.txt' );
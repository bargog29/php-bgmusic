<?php
# daca este definit un site, fac redirectarea
if( isset( $_GET[ 'site' ] ) ) {
// se foloseste instructiunea de selectie multipla
    switch( $_GET[ 'site' ] ) {
        case 'home':
            header( 'Location: /');
            break; // break este necesar dupa fiecare 'ramura' a lui switch
        case 'search':
            header( 'Location: http://www.google.ro' );
            break;
        default: // daca nici una din conditiile de mai sus nu a fost indeplinita
            header( 'Location: http://www.ugal.ro' );
    }
    exit; // dupa header() trebuie oprita executia scriptului
}
?>
<a href="page.php?site=home">home</a>
<a href="page.php?site=search">search</a>
<a href="page.php?site=ugal">ugal</a>

<?php
function testCookie() {
//se foloseste variabila globala $_SERVER pentru a prelua numele
//scripului curent (folosit la redirect)
    $paginaCurenta = $_SERVER[ 'PHP_SELF' ];
//se testeaza mai intai daca a fost creat cookie-ul
    if( empty( $_GET[ 'creat' ] ) ) {
//este prima data cand se acceseaza pagina
//se adauga un cookie de test
        setcookie( 'cookietest', 'verificare' );
//se face redirect la aceasi pagina si se adauga parametrul "creat"
//pentru a putea semnala faptul ca s-a incercat deja crearea cookieului
        header( 'Location: ' . $paginaCurenta . '?creat=1' );
        exit;
    } else {
//se va executa atunci cand exista parametrul GET, deci dupa
//redirect, cand cookie-ul a fost deja creat
        if( isset( $_COOKIE[ 'cookietest ' ] )
            && !empty( $_COOKIE[ 'cookietest' ] ) ) {
            return true;
        } else {
            return false;
        }
    }
}
if (testCookie()) print 'Browserul dvs. accepta cookie-uri';
else print 'Browserul dvs. nu accepta cookies';
<?php
$dsn = 'mysql:dbname=test;host=127.0.0.1';
$user = 'googleguy';
$password = 'googleguy';
/*
 Using try/catch around the constructor is still valid even though we set the
ERRMODE to WARNING since
 PDO::__construct will always throw a PDOException if the connection fails.
*/
try {
    $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE =>
        PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
// This will cause PDO to throw an error of level E_WARNING instead of an
exception (when the table doesn't exist)
$dbh->query("SELECT wrongcolumn FROM wrongtable");
?>
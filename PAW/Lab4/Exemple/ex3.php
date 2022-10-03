<?php
$dbh = new PDO('mysql:host=localhost;dbname=paw1', "root", "");
// use the connection here
$sth = $dbh->query('SELECT * FROM foo');
// and now we're done; close it
$sth = null;
$dbh = null;
?>

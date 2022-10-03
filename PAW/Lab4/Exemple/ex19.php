<?php
/* Begin a transaction, turning off autocommit */
$dbh->beginTransaction();
/* Change the database schema */
$sth = $dbh->exec("DROP TABLE fruit");
/* Commit the changes */
$dbh->commit();
/* Database connection is now back in autocommit mode */
?>

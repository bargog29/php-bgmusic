<?php
$stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (?, ?)");
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $value);
// insert one row
$name = 'one';
$value = 1;
$stmt->execute();
// insert another row with different values
$name = 'two';
$value = 2;
$stmt->execute();
?>
<?php
$stmt = $dbh->prepare("CALL sp_returns_string(?)");
$stmt->bindParam(1, $return_value, PDO::PARAM_STR, 4000);
// call the stored procedure
$stmt->execute();
print "procedure returned $return_value\n";
?>
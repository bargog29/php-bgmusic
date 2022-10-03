<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=paw1', "root", "",
        array(PDO::ATTR_PERSISTENT => true));
    echo "Connected\n";
} catch (Exception $e) {
    die("Unable to connect: " . $e->getMessage());
}
try {
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->beginTransaction();
    $dbh->exec("INSERT INTO dept VALUES ('50','TEST','WASHNGTON')");
    $dbh->exec("INSERT INTO emp VALUES ('7944','JOHN','CLERK','7782','1983-01-
01','1000.00',NULL,'50')");
    $dbh->commit();

} catch (Exception $e) {
    $dbh->rollBack();
    echo "Failed: " . $e->getMessage();
}
?>
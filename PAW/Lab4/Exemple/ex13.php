<?php
$db = new PDO('odbc:SAMPLE', 'db2inst1', 'ibmdb2');
$stmt = $db->prepare("insert into images (id, contenttype, imagedata) values (?,
?, ?)");
$id = get_new_id(); // some function to allocate a new ID
// assume that we are running as part of a file upload form
// You can find more information in the PHP documentation
$fp = fopen($_FILES['file']['tmp_name'], 'rb');
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $_FILES['file']['type']);
$stmt->bindParam(3, $fp, PDO::PARAM_LOB);
$db->beginTransaction();
$stmt->execute();
$db->commit();
?>
Exemplu - inserarea unei imagini într-o bază de date Oracle
Oracle folosește o sintaxă ușor diferită pentru inserarea unui lob dintr-un fișier. Insert-ul trebuie
efectuat într-o tranzacție, în caz contrar LOB-ul va fi introdus cu o lungime de zero
<?php
$db = new PDO('oci:', 'scott', 'tiger');
$stmt = $db->prepare("insert into images (id, contenttype, imagedata) " .
    "VALUES (?, ?, EMPTY_BLOB()) RETURNING imagedata INTO ?");
$id = get_new_id(); // some function to allocate a new ID
// assume that we are running as part of a file upload form
// You can find more information in the PHP documentation
$fp = fopen($_FILES['file']['tmp_name'], 'rb');
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $_FILES['file']['type']);
$stmt->bindParam(3, $fp, PDO::PARAM_LOB);
$db->beginTransaction();
$stmt->execute();
$db->commit();
?>

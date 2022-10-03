<?php
try
{
    $user = "root";
    $pass = "oracle";
    $dbh  = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    // echo "Ne-am conectat, esti bastan";
}
catch (PDOException $e)
{
    // echo "Could not connect to the database";
    die();
}
?>
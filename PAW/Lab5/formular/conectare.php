<?php
$host = "mb399.cti.ugal.ro:3306";
$username = "mb399";
$password = "cn25f6ea";
$database = "mb399";
try{
    $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
} catch (PDOException $exception){
    echo "Conexiune esuata!!!<br>";
    echo $exception;
}
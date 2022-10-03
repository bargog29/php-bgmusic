<?php
$text = "\xB1\x31";
$json = json_encode($text);
$error = json_last_error();
var_dump($json, $error === JSON_ERROR_UTF8);
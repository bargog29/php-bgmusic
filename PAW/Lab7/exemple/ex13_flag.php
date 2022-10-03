<?php
$file = 'people.txt';
$person = "John Smith\n";
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
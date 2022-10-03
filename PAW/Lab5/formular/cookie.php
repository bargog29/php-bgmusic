<?php

$visits = 0;
if (isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'];
}
$visits = $visits + 1;
setcookie('visits', $visits, time() + 3);
echo $visits;

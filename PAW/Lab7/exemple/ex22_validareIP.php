<?php
$ip_a = '127.0.0.1';
$ip_b = '42.42';
if (filter_var($ip_a, FILTER_VALIDATE_IP)) {
    echo "This (ip_a) IP address is considered valid.";
}
if (filter_var($ip_b, FILTER_VALIDATE_IP)) {
    echo "This (ip_b) IP address is considered valid.";
}
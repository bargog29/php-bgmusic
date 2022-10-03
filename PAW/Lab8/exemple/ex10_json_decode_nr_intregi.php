<?php
$json = '{"number": 12345678901234567890}';
var_dump(json_decode($json));
var_dump(json_decode($json, false, 512, JSON_BIGINT_AS_STRING));
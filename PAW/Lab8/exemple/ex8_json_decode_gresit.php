<?php
$bad_json = "{ 'bar': 'baz' }";
json_decode($bad_json); // null
$bad_json = '{ bar: "baz" }';
json_decode($bad_json); // null
$bad_json = '{ bar: "baz", }';
json_decode($bad_json);
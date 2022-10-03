<?php
echo "Sequential array".PHP_EOL;
$sequential = array("foo", "bar", "baz", "blong");
var_dump(
    $sequential,
    json_encode($sequential)
);
echo PHP_EOL."Non-sequential array".PHP_EOL;
$nonsequential = array(1=>"foo", 2=>"bar", 3=>"baz", 4=>"blong");
var_dump(
    $nonsequential,
    json_encode($nonsequential)
);
echo PHP_EOL."Sequential array with one key unset".PHP_EOL;
unset($sequential[1]);
var_dump(
    $sequential,
    json_encode($sequential)
);

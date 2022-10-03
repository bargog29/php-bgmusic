<?php
$fruits = array ( "fruits" => array ( "a" => "orange",
 "b" => "banana",
"c" => "apple"
 ),
 "numbers" => array ( 1,
 2,
 3,
 4,
5,
6
 ),
 "holes" => array ( "first",
 5 => "second",
 "third"
 )
 );
//
echo $fruits["holes"][5]; // "second"
echo $fruits["fruits"]["a"]; // "orange"
echo($fruits["holes"][0]); // "first"
var_dump($fruits);
// un nou tablou multidimensional
$juices["apple"]["green"] = "good";
var_dump($juices);
?>
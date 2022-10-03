<?php
// file MyClass1.php
class MyClass1 {
}
?>
<?php
// file MyClass2.php
class MyClass2 {
}
?>
<?php
// file test_autoload.php
spl_autoload_register(function ($class_name) {
 include $class_name . '.php';
});
$obj1 = new MyClass1();
$obj2 = new MyClass2();
var_dump($obj1);
var_dump($obj2);
?>

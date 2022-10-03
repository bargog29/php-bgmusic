<?php
// Pre PHP 7 code
class Logger
{
 public function log($msg)
 {
 echo $msg;
 }
}
$util->setLogger(new Logger());
// PHP 7+ code
$util->setLogger(new class {
 public function log($msg)
 {
 echo $msg;
 }
});
?>
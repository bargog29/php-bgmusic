<?php
// Declare the interface 'iTemplate'
interface iTemplate
{
 public function setVariable($name, $var);
 public function getHtml($template);
}
// Implement the interface
// This will work
class Template implements iTemplate
{
 private $vars = array();

 public function setVariable($name, $var)
 {
 $this->vars[$name] = $var;
 }

 public function getHtml($template)
 {
 foreach($this->vars as $name => $value) {
 $template = str_replace('{' . $name . '}', $value, $template);
 }
 return $template;
 }
}
// This will not work
// Fatal error: Class BadTemplate contains 1 abstract methods
// and must therefore be declared abstract (iTemplate::getHtml)
class BadTemplate implements iTemplate
{
 private $vars = array();

 public function setVariable($name, $var)
 {
 $this->vars[$name] = $var;
 }
}
?>

<?php
trait PropertiesTrait {
    public $same = true;
    public $different = false;
}
class PropertiesExample {
    use PropertiesTrait;
    public $same = true; // Allowed as of PHP 7.0.0; E_STRICT notice formerly
    public $different = true; // Fatal error
}
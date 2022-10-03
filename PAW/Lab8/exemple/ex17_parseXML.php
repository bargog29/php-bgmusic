<?php
require("parseXML.php");
class parseXML2 extends parseXML {
    var $is_email = 0;
    function start_element($parser, $name, $attrs) {
        parseXML::start_element($parser, $name, $attrs);
        if (!strcmp($name, "nume")) {
            if ($attrs["email"]) {
                $format = "<a title=\"Trimite mesaj la " .
                    $attrs["email"] .
                    "\" href=\"mailto:" . $attrs["email"] . "\">";
                $this->html_code .= $format;
                $this->is_email = 1;
            }
            else
                $this->is_email = 0;
        }
    }
    function end_element($parser, $name) {
        if (!strcmp($name, "nume")) {
            if ($this->is_email) {
                $format = "";
                $this->html_code .= $format;
            }
        }
        parseXML::end_element($parser, $name);
    }
}
<?php
class parseXML {
    var $xml_parser;
    var $xml_file;
    var $html_code;
    var $open_tags;
    var $close_tags;

    function __construct() {
        $this->xml_parser = "";
        $this->xml_file = "";
        $this->html_code = "";
        $this->open_tags = array();
        $this->close_tags = array();
    }
    function __destruct() {
        if ($this->xml_parser)
            xml_parser_free($this->xml_parser);
    }
    function set_open_tags($tags) {
        $this->open_tags = $tags;
    }
    function set_close_tags($tags) {
        $this->close_tags = $tags;
    }
    function set_xml_file($file) {
        $this->xml_file = $file;
    }
    function get_html_code() {
        return $this->html_code;
    }
    function start_element($parser, $name, $attrs) {
        if ($format = $this->open_tags[$name])
            $this->html_code .= $format;
    }
    function end_element($parser, $name) {
        if ($format = $this->close_tags[$name])
            $this->html_code .= $format;
    }
    function character_data($parser, $data) {
        $this->html_code .= $data;
    }
    function processing_instruction($parser, $target, $data) {
        switch (strtolower($target)) {
            case "php": eval($data);
                break;
        }
    }
    function parse() {
        $this->xml_parser = xml_parser_create();
        xml_set_object($this->xml_parser, $this);
        xml_parser_set_option($this->xml_parser,
            XML_OPTION_CASE_FOLDING, false);
        xml_set_element_handler($this->xml_parser,
            "start_element", "end_element");
        xml_set_character_data_handler($this->xml_parser,
            "character_data");
        xml_set_processing_instruction_handler($this->xml_parser,
            "processing_instruction");
        if (!($fp = fopen($this->xml_file, "r")))
            die("could not open XML source");
        while ($data = fread($fp, 4096)) {
            if (!xml_parse($this->xml_parser, $data, feof($fp))) {
                die(sprintf("XML error: %s at line %d",
                    xml_error_string(xml_get_error_code
                    ($this->xml_parser)),
                    xml_get_current_line_number($this->xml_parser)));
            }
        }
    }
}
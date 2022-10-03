<?php
require("parseXML.php");
$open_tags = array(
    "impresii" => "\n<!— generat de parseXML —>\n" .
        "<table cellpadding=\"5\" align=\"center\"
border=\"1\">",
    "impresie" => "<tr align=\"center\">",
    "nume" => "<td><h4>",
    "ocupatia" => "<td><p style=\"color: blue\">",
    "virsta" => "<td><p><i>",
    "text" => "<td bgcolor=\"#EEEEEE\"><p
align=\"justify\">");
$close_tags = array(
    "impresii" => "</table>\n" .
        "<!— sfârșitul generării parseXML —>\n",
    "impresie" => "</tr>",
    "nume" => "</h4></td>",
    "ocupatia" => "</p></td>",
    "virsta" => "</i></p></td>",
    "text" => "</p></td>");
$parser = new parseXML();
$parser->set_xml_file("impresii.xml");
$parser->set_open_tags($open_tags);
$parser->set_close_tags($close_tags);
$parser->parse();
echo $parser->get_html_code();
$parser->destroy();
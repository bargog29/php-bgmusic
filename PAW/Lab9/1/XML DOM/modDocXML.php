<?php
$xml_file = 'files/dom_example.xml';
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml_file);
$root = $xmlDoc->documentElement;
$elms = $root->getElementsByTagName("*");
$nr_elms = $elms->length;
for($i = 0; $i<$nr_elms; $i++) {
    $node = $elms->item($i);

    if($node->nodeName=='div') {
        $node->nodeValue = 'The new text value';
        $new_elm = $xmlDoc->createElement('div', 'This is the new inserted DIV');
        $node->parentNode->appendChild($new_elm);
    }
}

if($xmlDoc->save($xml_file)) {
    echo htmlentities($xmlDoc->saveXML());
}
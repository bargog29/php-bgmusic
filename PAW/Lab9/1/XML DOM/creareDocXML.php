<?php
$xml_file = 'files/dom_example.xml';
$xmlDoc = new DOMDocument('1.0', 'utf-8');
$root = $xmlDoc->createElement('html');
$root = $xmlDoc->appendChild($root);
$body = $xmlDoc->createElement('body');
$body = $root->appendChild($body);
$body->setAttribute('bgcolor', '#f1f1f1');
$div = $xmlDoc->createElement('div');
$div = $body->appendChild($div);
$text = $xmlDoc->createTextNode('PHP – XML DOM test');
$text = $div->appendChild($text);
if($xmlDoc->save($xml_file))
    echo 'The dom_example.xml was created';
else
    echo 'Error: unable to write dom_example.xml';
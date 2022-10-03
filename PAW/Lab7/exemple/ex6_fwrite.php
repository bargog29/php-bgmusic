<?php
$filename = 'test.txt';
$somecontent = "Add this to the file\n";
if (is_writable($filename)) {
    if (!$handle = fopen($filename, 'a')) {
        echo "Cannot open file ($filename)";
        exit;
    }
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
    echo "Success, wrote ($somecontent) to file ($filename)";
    fclose($handle);
} else {
    echo "The file $filename is not writable";
}
<?php
$folder = getcwd();
$handle = opendir($folder);
if (!empty($handle)) {
    echo "Fisiere si directoare:\n";
    $terminat = false;
    while ($terminat == false) {
        $file = readdir($handle);
        if($file === false) {
            $terminat = true;
        } else {
            echo "$file\n";
            echo "<br />";
        }
    }
    closedir($handle);
}
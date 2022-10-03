<?php
$handle = fopen("http://www.example.com/", "rb");
$contents = stream_get_contents($handle);
fclose($handle);
?>
<?php
$handle = fopen("http://www.example.com/", "rb");
if (FALSE === $handle) {
    exit("Failed to open stream to URL");
}
$contents = '';
while (!feof($handle)) {
    $contents .= fread($handle, 8192);
}
fclose($handle);
<?php
echo getcwd();
chdir('exemple');
$vector = scandir(getcwd());
print_r($vector);
echo is_dir("c:\\cale\\fisier.txt");
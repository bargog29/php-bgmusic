<?php
$v = 'o valoare'; // definesc o variabila
echo <<<'EOT'
Variabilele si caracterele speciale nu sunt interpretate.
$v si \n raman asa cum sunt.
EOT;
?>
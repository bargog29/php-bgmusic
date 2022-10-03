<?php
$i = 0;
while($i++ < 5) {
echo "Ciclul #1 <br>\n";
while(1) {
echo "&nbsp;&nbsp;Ciclul #2 <br>\n";
while (1) {
echo "&nbsp;&nbsp;Ciclul #3<br>\n";
continue 3; //intrerupe 3 cicluri imbricate
}
echo "Acest mesaj nu va fi afisat niciodata.<br>\n";
}
echo "Nici acest mesaj nu va fi afisat niciodata.<br>\n";
}
?>
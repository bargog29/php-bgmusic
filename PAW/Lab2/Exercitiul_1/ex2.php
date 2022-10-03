<?php
$salariu = array("Ionescu"=>"2500", "Popescu"=>"3700", "Georgescu"=>"1500");
echo "Ionescu are un salariu de " . $salariu['Ionescu'] . " lei.";
?>
<?php
$salariu['Ionescu'] = "2500";
$salariu['Popescu'] = "3700";
$salariu['Georgescu'] = "1500";
echo "Ionescu are un salariu de " . $salariu['Ionescu'] . " lei.";
?>
<?php
//rezultatele obtinute la o extragere 6/49
$numar[1]=15;
$numar[2]=7;
$numar[3]=13;
$numar[4]=44;
$numar[5]=9;
$numar[6]=21;
//parcurgerea si afisarea rezultatelor
for ($i=1;$i<=6;$i++) {
echo $numar[$i]."/";
}
//date despre persoane - matrice
$date[1]["nume"]="Ion";
$date[1]["prenume"]="Costin";
$date[1]["varsta"]=30;
$date[2]["nume"]="Hagi";
$date[2]["prenume"]="Gheorghe";
$date[2]["varsta"]=38;
$date[3]["nume"]="Pop";
$date[3]["prenume"]="Vasile";
$date[3]["varsta"]=19;
//parcurgerea si afisarea datelor
for ($i=1; $i<=3; $i++) {
echo "Nume:". $date[$i]["nume"]."<br>";
echo "Prenume:". $date[$i]["prenume"]."<br>";
echo "Varsta:". $date[$i]["varsta"]."<br>";
}
?>
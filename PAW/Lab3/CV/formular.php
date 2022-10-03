<?php
echo "INFORMATII GENERALE</br>";
class Persoana{
    public $prenume;
    public $nume; 
    public $dataNastere;
    public $gen;
    function __construct(){
       echo "Construit persoana <br>";
    }
    public function setnume($prenume){
       $this->prenume = $prenume;
    }
    public function setprenume($nume){
       $this->nume = $nume;
    }
    public function setdataNastere($dataNastere){
       $this->dataNastere = $dataNastere;
    }
    public function setGen($gen){
       $this->gen = $gen;
    }
    public function showPersoana(){
       echo "Prenume: $this->prenume <br>";
       echo "Nume: $this->nume <br>";
       echo "Data nastere: $this->dataNastere <br>";
       echo "Gen: $this->gen <br>";
    }
 }
  $Persoana1 = new Persoana();
  $var = $_POST["prenume"];
  $Persoana1->setprenume($var);
  $var = $_POST["nume"];
  $Persoana1->setnume($var);
  $var = $_POST["dataNastere"];
  $Persoana1->setdataNastere($var);
  $var = $_POST["gen"];
  $Persoana1->setGen($var);
  $Persoana1->showPersoana();
$despre=$_POST["despre"];
echo "$despre</br>";
$nationalitate=$_POST["nationalitate"];
echo "$nationalitate</br>";
echo "CONTACT</br>";
$mail=$_POST["mail"];
echo "$mail</br>";
$telefon=$_POST["telefon"];
echo "$telefon</br>";
$social=$_POST["social"];
echo "$social</br>";
echo "ADRESA</br>";
$tipAdresa=$_POST["tipAdresa"];
echo "$tipAdresa</br>";
$adresa1=$_POST["adresa1"];
echo "$adresa1</br>";
$adresa2=$_POST["adresa2"];
echo "$adresa2</br>";
$zip=$_POST["zip"];
echo "$zip</br>";
$localitate=$_POST["localitate"];
echo "$localitate</br>";
$tara=$_POST["tara"];
echo "$tara</br>";
echo "EXPERIENTA PROFESIONALA</br>";
$functie=$_POST["functie"];
echo "$functie</br>";
$angajator=$_POST["angajator"];
echo "$angajator</br>";
$localitateAngajator=$_POST["localitateAngajator"];
echo "$localitateAngajator</br>";
$taraAngajator=$_POST["taraAngajator"];
echo "$taraAngajator</br>";
$angdela=$_POST["angdela"];
echo "$angdela</br>";
$angpanala=$_POST["angpanala"];
echo "$angpanala</br>";
$incurs=$_POST["incurs"];
echo "$incurs</br>";
$responsabilitati=$_POST["responsabilitati"];
echo "$responsabilitati</br>";
echo "Educație și formare profesională:</br>";
$calificare=$_POST["calificare"];
echo "$calificare</br>";
$institutia=$_POST["institutia"];
echo "$institutia</br>";
$adresaInstitutie=$_POST["adresaInstitutie"];
echo "$adresaInstitutie</br>";
$zipOrganizatie=$_POST["zipOrganizatie"];
echo "$zipOrganizatie</br>";
$localitateOrganizatie=$_POST["localitateOrganizatie"];
echo "$localitateOrganizatie</br>";
$taraOrganizatie=$_POST["taraOrganizatie"];
echo "$taraOrganizatie</br>";
$siteWebInstitutie=$_POST["siteWebInstitutie"];
echo "$siteWebInstitutie</br>";
$dataInstitutie=$_POST["dataInstitutie"];
echo "$dataInstitutie</br>";
$dataInstitutiePana=$_POST["dataInstitutiePana"];
echo "$dataInstitutiePana</br>";
$inCursOrganizatie=$_POST["inCursOrganizatie"];
echo "$inCursOrganizatie</br>";
echo "Competențe personale:</br>";
$limbam=$_POST["limbam"];
echo "$limbam</br>";
$limbaa=$_POST["limbaa"];
echo "$limbaa</br>";
$competenteDigitale=$_POST["competenteDigitale"];
echo "$competenteDigitale</br>";
?>
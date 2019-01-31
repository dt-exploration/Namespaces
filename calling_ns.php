<?php

//Koristi se sledeci namespace:
use DutjaProject\Wild;

require_once("D:/xampp/htdocs/symphart/public/namespaces.php");
header('Content-type: text/plain');

$niz=array(5,4,7,2,6,4,9,1);

//(Konstante su boundovane za namespace, varijable ne);
//Konstanta u namespace-u mora biti deklarisana sa "const"
echo Wild\DUSKO."<br>";

//Funkcija sort je iz drugog namespace-a, vraca sumu niza
$d=Wild\sort($niz);
echo $d;

//Pozivanje metoda iz 2. namespace-a i kreiranje objekata
Wild\Decak::broj_decaka_init();
$duki=new Wild\Decak(4);
$vasa=new Wild\Decak(3);
$sima=new Wild\Decak(2);
$milan=new Wild\Decak(3);

echo $vasa->getGodine();
echo Wild\Decak::getBrDecaka();
echo dux;
 ?>

<html>
<body>
<?php

//Koristi se sledeci namespace:
use DutjaProject\Wild;
use DutjaProject\Wild\Decak as Decko;

class Decak
{
    private $ok;

    public function __construct()
    {
        $this->ok = true;
    }
}

require_once("D:/xampp/htdocs/symphart/public/namespaces.php");
//header('Content-type: text/plain');

$niz=array(5,4,7,2,6,4,9,1);

//(Konstante su boundovane za namespace, varijable ne);
//Konstanta u namespace-u mora biti deklarisana sa "const"
echo Wild\DUSKO."<br>";

//Funkcija sort je iz drugog namespace-a, vraca sumu niza
$d=Wild\sort($niz);
//echo $d;

//Pozivanje metoda iz 2. namespace-a i kreiranje objekata
Decko::broj_decaka_init();
$duki=new Decko(4);
$vasa=new Decko(3);
$sima=new Decko(2);
$milan=new Decko(3);
//$ivan=new Decko(2);

echo $vasa->getGodine()."<br>";
echo Decko::getBrDecaka()."<br>";
echo dux;
 ?>
</body>
</html>

<?php

namespace DutjaProject\Wild;

$x = 5;
define("dux", 1992);
const DUSKO = 'dulence';

function sort($d)
{
    $s=0;

    for($i = 0; $i < count($d); $i++) {
        $s = $s + $d[$i];
    }

    return $s;
}

class Decak {

private $godine;
static $broj_decaka;

public function __construct($godine_param)
{
    $this->godine = $godine_param;
    self::$broj_decaka++;
}

public function getGodine()
{
    return $this->godine;
}

public static function broj_decaka_init()
{
    self::$broj_decaka = 0;
}

public static function getBrDecaka()
{
    return self::$broj_decaka;
}

}
 ?>

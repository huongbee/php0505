<?php

class InSo{
    public static $soA = 5;

    function setA($A){
        InSo::$soA = $A;
    }
}
echo InSo::$soA; //5
echo "<br>";


$so = new InSo;
$so->setA(12);
echo $so::$soA; //12
echo "<br>";



echo InSo::$soA; //12

$s = new InSo;

echo "<br>";

echo $s::$soA;

// function tinh(&$a){
//     return $a+=1;
// }

// $a = 5;
// echo tinh($a); //6

// echo $a; //6
?>
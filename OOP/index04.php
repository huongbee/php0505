<?php
class Calculator{
    private $a ;
    private $b ;
    function __construct($A, $B){
        $this->a = $A;
        $this->b = $B;
    }

    function cong(){
        return $this->a + $this->b;
    }
    function tru(){
        return  $this->a - $this->b;
    }
    function nhan(){
        return  $this->a * $this->b;
    }
    function chia(){
        if($this->b==0){
            return "Error!";
        }
        return  $this->a / $this->b;
    }
}
$c = new Calculator(3,4);
echo $c->cong();
echo "<br>";
echo $c->tru();
echo "<br>";
echo $c->nhan();
echo "<br>";
echo $c->chia();
echo "<br>";


?>
<?php
class SinhVien{
    public $name;

    public function __construct($name){
        echo __CLASS__ .' duoc khoi tao';
        echo "<br>";
        echo __FUNCTION__.' duoc goi';
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }
    function __destruct(){
        $this->name = NULL;
        echo $this->name;
        //unset($this->name);
        echo "<br>";
        
        echo __CLASS__.' da bi huy';
    }
}

class HocSinh extends SinhVien{
    function __construct($name){
        echo "----";
        parent::__construct($name);
    }

    function getName(){
        return "Ten :".$this->name;
    }

    function data(){
        //return $this->getName();
        return self::getName();
        //return parent::getName();
    }
}

$hs = new HocSinh("An");
echo "<br>";

echo $hs->data();


// $sv = new SinhVien('A');
// echo "<br>";
// echo $sv->getName();
// echo "<br>";
//$sv2 = new SinhVien;

?>
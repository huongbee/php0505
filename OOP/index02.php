<?php
class SinhVien{
    private $name1 = 'name1';
    protected $name2 = 'name2';
    public $name3 = 'name3';
    
    function getName1(){
        return $this->name1;
    }
    protected function getName2(){
        return $this->name2;
    }
    
}

class HocSinh extends SinhVien{

    function getName2(){
        return $this->name2;
    }
}

class HocSinh2 extends SinhVien{

    function getName2(){
        return $this->name2;
    }
}

$hs = new HocSinh;
echo $hs->getName2();
//var_dump($hs);



// class Sinhvien{
//     var $name = 'a';

// }
// $sv = new Sinhvien;
// echo $sv->name;
// var_dump($sv);
?>
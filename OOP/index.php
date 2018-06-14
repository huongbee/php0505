<?php

class SinhVien{
    private $name = "A";
    public $age = 1;

    public function setName($newName){
        $this->name = $newName;
    }
    function getName(){
        return $this->name;
    }
}

$sv = new SinhVien;
//echo $sv->name;
$sv->setName("Ti");

echo "<br>";
//echo $sv->name;


echo "<br>";
echo $sv->getName();

//$sv2 = new SinhVien;
// if($sv === $sv2){
//     echo "bang nhau";
// }
// else{
//     echo "khac nhau";
// }
// var_dump($sv);
// var_dump($sv2);

?>
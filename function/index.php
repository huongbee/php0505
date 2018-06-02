<?php

// function hello($name = 'A'){
//     echo "Hello $name";
// }

// hello('Ti');
// echo "<br>";
// hello('Teo');
// echo "<br>";

// hello();


// function dem(&$count=1){
//     return $count+=1;
// }
// function dem($count=1){
//     return $count+=1;
// }

// $d = 2;
// echo dem($d); //3

// echo "<br>";
// echo $d; //2

//echo $name;
//echo number_format();

function tinhTong($a, $b){
    return $a+$b;
}
//echo tinhTong(1,1);


//2 5 -> 2 3 4 5
//5 2 -> 5 4 3 2


function inDaySo($start, $end){
    $kq = '';
    if($start>$end)
        $kq = 'Vui long nhap a < b';
    else{
        for($start; $start<=$end;$start++){
            $kq .= $start . " ";
        }
    }
    return $kq;
}

function inDaySoNguoc($start, $end){
    $kq = '';
    if($start<$end)
        $kq = 'Vui long nhap a > b';
    else{
        for($start; $start >= $end; $start--){
            $kq .= $start . " ";
        }
    }
    return $kq;
}
// echo inDaySoNguoc(20, 10);
// echo "<br>";
// echo inDaySoNguoc(10, 20);

//3 4 5 6 7 9
function checkSNT($number){
    if($number<=1) return false;
    for($i = 2; $i <= sqrt($number); $i++){
        if($number % $i == 0) return false; 
    }
    return true;
}
function InSNT($start, $end){
    $kq = '';
    if($start>$end)
        $kq = 'Vui long nhap a < b';
    else{
        for($start; $start<=$end; $start++){
            if(checkSNT($start)){
                $kq .= $start . ' ';
            }
        }
    }
    return $kq;
}
//echo InSNT(10,100);
// $c = checkSNT(13);
// var_dump($c);


function phepChia($a, $b){
    if($b==0){
        throw new Exception("b phai khac 0");
    }
    return $a/$b;
}
try{
    phepChia(1,0);
}
catch(Exception $e){
    echo $e->getMessage();
}

phepChia(1,0);

?>
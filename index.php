<?php

// echo "Hello PHP";

// if(1>2){
//     echo "yes";
// }
// else{
//     echo "no";
// }
// $a = "Hello Ti";
// echo $a;

// $b = 12;
// echo $b;

/**
 * d2erq
 * we
 * 
*/

// $c = true;
// echo gettype($c);
$array = [
    12,
    2345,
    'huong',
    [
        1234,
        345
    ]
];

$arr = [
    'key'=>'huong'
];

$json = json_encode($arr);
echo $json;
// echo gettype($json);

class A{
    var $name = "huong";
}

$a = new A;
echo gettype($a);
?>

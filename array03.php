<?php

$arr1 = [1,4,7,2,5];
$arr2 = ['huong', 'KP', 'Ti'];

$arr3 = [
    $arr1,
    $arr2
];

$arr4 = [
    [
        'name'=> 'Khoa Pham',
        'age' => 26,
        'gender' => 'nam' 
    ],
    [
        'name'=> [
            'Ti',
            'Teo'
        ],
        'age' => 12,
        'gender' => 'nam' 
    ],
    ['member'=> 2],
    12345
];

echo "<pre>";
print_r($arr4);

$mem = $arr4[2];
print_r($mem);

echo $mem['member'];

echo $arr4[2]['member'];

echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";


?>
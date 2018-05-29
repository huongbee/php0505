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



$arrSanpham = [
    [
        'name'=>'iPhone 6 32GB',
        'price'=>7490000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>'Samsung Galaxy J7 Pro',
        'price'=>6090000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/103404/samsung-galaxy-j7-pro-2323-400x460.png'
    ],
    [
        'name'=>'Oppo F5',
        'price'=>6990000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/131915/oppo-f5-red-ah-400x460.png'
    ],
    [
        'name'=>'Samsung Galaxy A6 (2018)',
        'price'=>7490000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>'iPhone 6 32GB',
        'price'=>6990000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/157031/samsung-galaxy-a6-2018-1-400x460.png'
    ],
    [
        'name'=>'iPhone 8 Plus 64GB',
        'price'=>7490000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>'iPhone 6 32GB',
        'price'=>23990000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/114110/iphone-8-plus-64gb-h1-400x460.png'
    ],
    [
        'name'=>'Samsung Galaxy S9+ 64GB',
        'price'=>23490000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/147939/samsung-galaxy-s9-plus-3-400x460.png'
    ],
    [
        'name'=>'iPhone 6 32GB',
        'price'=>7490000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>'iPhone 6 32GB',
        'price'=>7490000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>'iPhone 6 32GB',
        'price'=>7490000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
    [
        'name'=>'iPhone 6 32GB',
        'price'=>7490000,
        'image'=>'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-vang-400-400x460.png'
    ],
];

print_r($arrSanpham);


echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";



?>
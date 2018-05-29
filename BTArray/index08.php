<?php
require 'data.php';

foreach($arrSanpham as $sp){
    //echo array_search('iPhone 8 Plus 64GB',$sp);
    if('iPhone 8 Plus 64GB'==$sp['name']){
        echo "ton tai";
    }
}


$arr1 = [1,4,7,2,5];
$arr2 = ['huong', 'KP', 'Ti'];
$arr = array_merge($arr1,$arr2);
array_push($arr,"new name");
array_pop($arr);
unset($arr[2]);
$arr[2] = 'Name!!';

//array_splice($arr,4,0,1234);
//array_splice($arr,4,1,1234);
array_splice($arr,6,0,[1,2,3,4]);

print_r($arr);

die;
$arr = [
    'name'=>'iPhone 6 32GB',
    'name1'=>'iPhone 6 32GB',
    'name2'=>'iPhone 8 Plus 64GB',
    'name3'=>'iPhone 6 32GB',
];
echo array_search('iPhone 8 Plus 64GB 2',$arr);


?>
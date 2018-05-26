

<?php

$arr = array(
    'key1' => 12134,
    'key2' => 'name',
    'key3' => true,
    1 => 4,
    2 => 'Van A'
);


foreach($arr as $k=>$v){
    echo $k . '------ '. $v ;
    echo "<br>";

}

foreach($arr as $a){
    echo $a . ' ';
}
echo "<hr>";
$arr2 = [1,2,3,6,4,5,6, 'name', true];

foreach($arr2 as $a){
    echo $a . ' ';
}

die;
$arr3 = array(1,2,3,6,4,5,6, 'name', true);

$count = count($arr3); //so ptu cua array
for($i=0; $i< $count; $i++){
    //echo $arr3[$i] . '    ';
    //echo '<input type="text" value="'.$arr3[$i].'">';
    echo "<input type='text' value='$arr3[$i]'>";
    echo "<br>";
}
for($i=0; $i< $count; $i++):
    //echo $arr3[$i] . '    ';
    //echo '<input type="text" value="'.$arr3[$i].'">';
    echo "<input type='text' value='$arr3[$i]'>";
    echo "<br>";
endfor;

// echo $arr3[3];

// echo $arr['key2'];

echo "<pre>";

print_r($arr3);
print_r($arr);

echo "</pre>";

?>


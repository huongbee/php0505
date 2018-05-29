<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style07.css">
</head>
<?php

//include 'data.php';
//include 'data.php';

// include_once 'data.php';
// include_once 'data.php';

// require 'data.php';
require_once 'data.php';
//print_r($arrSanpham);


// foreach($arrSanpham as $sp){
//     echo $sp['name'];
//     echo "<br>";
// }
//echo number_format(25000);
//echo number_format(25000,2);
//echo number_format(25000,2,',','.');

?>

<body>
    <div class="content">
        <?php foreach($arrSanpham as $sp): ?>
            <div class="item">
                <div class="image">
                    <img src="<?=$sp['image']?>" alt="<?=$sp['name']?>">
                </div>
                <div class="info">
                    <h2><?=$sp['name']?></h2>
                    <p>Giảm ngay 300.000đ </p>
                    <p>Giảm ngay 300.000đ </p>
                    <p class="promotion">Khuyến mãi </p>
                    <p>Giảm ngay 300.000đ </p>
                    <p>Giảm ngay 300.000đ </p>
                    <p>Giảm ngay 300.000đ </p>                
                </div>
                <div class="name"><?=$sp['name']?></div>
                <div class="price"> <?=number_format($sp['price'])?> đồng</div>
            </div>
        <?php endforeach?>
    </div>
</body>
</html>
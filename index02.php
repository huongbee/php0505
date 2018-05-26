<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .banco{
        width: 640px;
        margin: auto
    }
    .oco{
        width: 80px;
        height: 80px;
        float: left
    }
    .trang{
        background-color: #fff
    }
    .den{
        background-color: #000
    }
</style>
<body>
    <div class="banco">
        <?php
            for($i =1; $i<=8; $i++){
                for($x = 1; $x<=8; $x++){
                    if(($i+$x)%2 ==0 ){
                        echo '<div class="oco trang"></div>';
                    }
                    else
                        echo '<div class="oco den"></div>';
                }
            }
        
        ?>
        
        
    </div>
</body>
</html>
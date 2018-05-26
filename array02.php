<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        <?php
            $arr3 = array(1,2,3,6,4,5,6, 'name', true);
            for($i=0; $i< count($arr3); $i++){
        ?>
        <input type="text" value="<?=$arr3[$i]?>">
        <br>
        <?php }?>
        <hr>
        <?php
            $arr3 = array(1,2,3,6,4,5,6, 'name', true);
            for($i=0; $i< count($arr3); $i++):
        ?>
        <input type="text" value="<?=$arr3[$i]?>">
        <br>
        <?php endfor?>
    </form>
</body>
</html>
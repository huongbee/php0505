<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<?php
if(isset($_GET['txtSoa']) && isset($_GET['txtSob'])){
    if(is_numeric($_GET['txtSoa']) && is_numeric($_GET['txtSob'])){
        $kq = (int)$_GET['txtSoa'] + (int)$_GET['txtSob'];
    }
    else echo "Vui long nhap so";
}
else{
    echo "Vui long nhap 2 so";
}
//echo isset($_GET['txtSoa']) ? $_GET['txtSoa'] : '';
?>

<body>
    <form method="get">
        <input value="<?=isset($_GET['txtSoa']) ? $_GET['txtSoa'] : ''?>" type="text" name="txtSoa" placeholder="a">
        +
        <input value="<?=@$_GET['txtSob']?>" type="text" name="txtSob" placeholder="b">
        =
        <input type="text" value="<?=isset($kq) ? $kq : ''?>" name="txtKetqua" placeholder="0" readonly>

        <input type="submit" value="Tính"> 
    </form>
</body>
</html>
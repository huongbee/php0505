<?php
session_start();
// if(isset($_SESSION['username']) && isset($_SESSION['password'])){

//     if($_SESSION['username'] != "admin" || $_SESSION['password']!=md5(md5(111111).'my-key')){
//         $_SESSION['error'] = "Vui lòng đăng nhập";
//         header('Location:login.php');
//     }
// }
// elseif(!isset($_COOKIE['userID']) && $_COOKIE['userID'] != 'admin'){
//     $_SESSION['error'] = "Vui lòng đăng nhập";
//     header('Location:login.php');
// }
// else{
//     $_SESSION['error'] = "Vui lòng đăng nhập";
//     header('Location:login.php');
// }
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
    if(!isset($_COOKIE['userID']) || $_COOKIE['userID'] != 'admin'){
        $_SESSION['error'] = "Vui lòng đăng nhập";
        header('Location:login.php');
    }
    else{
        $_SESSION['username'] = $_COOKIE['userID'];
        $_SESSION['password'] = $_COOKIE['userToken'];
        //echo "use cookie";
    }
}
else{
    //echo "use session";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <p>Chào bạn, <?=$_SESSION['username']?></p>
    <p><a href="logout.php">Đăng xuất</a></p>
</body>
</html>
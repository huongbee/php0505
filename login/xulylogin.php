<?php
session_start();
//admin //111111
if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == 'admin' && $_POST['password'] == 111111){
        $_SESSION['username'] = 'admin';
        $_SESSION['password'] = md5(md5(111111).'my-key'); //96e79218965eb72c92a549dd5a330112my-key
        
        header('Location:home.php');
    }
    else{
        $_SESSION['error'] = "Sai thông tin đăng nhập";
        header('Location:login.php');
    }
}
else{
    $_SESSION['error'] = "Vui lòng đăng nhập";
    header('Location:login.php');
}





?>
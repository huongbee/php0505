<?php

if(isset($_POST['username']) && isset($_POST['password']) && $_POST['password']==111111 && $_POST['username'] == "admin"){
    header('Location:home.php');
}
else header('Location:login.php');


?>
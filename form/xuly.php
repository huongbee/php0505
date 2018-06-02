<?php

// echo $_GET['txtNumber'];
// if(isset($_GET['name'])){
//     echo $_GET['name'];
// }
// else{
//     echo "Ko ton tai name";
// }

// if(isset($_POST['txtNumber'])){
//     echo $_POST['txtNumber'];
// }
// else{
//     echo "ko ton tai txtNumber";
// }

if(isset($_REQUEST['txtNumber'])){
    header('Location:home.php');
}
else{
    echo "ko ton tai txtNumber";
}
// echo "<pre>";
// $a = $_SERVER;
// print_r($a);


// username = 'admin' pw=11111


?>
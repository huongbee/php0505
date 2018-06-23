<?php

require 'DBConnect.php';

// $sql = 'INSERT INTO users(username,password,fullname,birthdate,gender,address,email)
//         VALUES("nguyenvana04","123456","Nguyễn Văn A","2018-1-30","nữ","Quận 1","nguyenvana04@gmail.com")';

// $sql = "DELETE FROM users WHERE username=? OR username=?";
// $data = ['1377764620473','712286668573'];

// $connect = new DBConnect;
// $c = $connect->executeQuery($sql,$data);
// echo $c?"thanh cong":'thatbai';

// $sql = "SELECT * FROM users  WHERE username=?";
// $username = ['nguyenvana01'];
// $connect = new DBConnect;
// $data = $connect->loadOneRow($sql,$username);
// print_r($data);

$sql = "SELECT * FROM users";
$connect = new DBConnect;
$data = $connect->loadMoreRows($sql);
var_dump($data);

?>
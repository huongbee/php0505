<?php
try{
    $connect = new PDO('mysql:host=localhost;dbname=php0505_3','root','');
    $connect->exec("set names utf8");


    // $sql = 'INSERT INTO users(username,password,fullname,birthdate,gender,address,email)
    //         VALUES("nguyenvana01","123456","Nguyễn Văn A","2018-1-30","nữ","Quận 1","nguyenvana01@gmail.com")';
    //$sql = "UPDATE users SET phone='1234568564' WHERE username='nguyenvana01'";

    //$data = $connect->exec($sql);
    //var_dump($data);
    //echo "connect success";

    // $sql = "UPDATE users SET phone='098765432' WHERE username='nguyenvana01'";
    // $stmt = $connect->prepare($sql);
    // $c = $stmt->execute();//boolean
    // echo $c?"thanh cong":'that bai';


    // $sql = "SELECT * FROM users  WHERE username='nguyenvana01'";
    // $stmt = $connect->prepare($sql);
    // $check = $stmt->execute();
    // if($check){
    //     //$data = $stmt->fetch(); //single row => array
    //     $data = $stmt->fetchObject(); ////single row => object
    //     echo $data->username;
    //     // $data = $stmt->fetchAll(PDO::FETCH_ASSOC); //array
    //     // foreach($data as $user){
    //     //     echo $user['username'];
    //     //     echo "<br>";
    //     // }
    
    //     //$data = $stmt->fetchAll(PDO::FETCH_NUM);
    //     // $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        
    //     // foreach($data as $user){
    //     //     echo $user->username;
    //     //     echo "<br>";
    //     // }
    //     print_r($data);
    // }
    // else{
    //     echo 'Execute error';
    // }



    $sql = "UPDATE users SET username=? WHERE email=?";
    $stmt = $connect->prepare($sql);
    
    $stmt->bindValue(1,"nguyenvana03");
    $stmt->bindValue(2,"huong@gmail.com");
    
    // $un = "nguyenvana02";
    // $email = 'huong@gmail.com';
    // $stmt->bindParam(1,$un);
    // $stmt->bindParam(2,$email);
    $c = $stmt->execute();//boolean
    echo $c?"thanh cong":'that bai';
}
catch(Exception $e){
    echo "Error: ".$e->getMessage();
}




?>
<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');
//echo date_default_timezone_get();
//die;


//echo $_POST['image'];
$file = $_FILES['image'];
if($file['error'] > 0){
    header('Location:upload.php');
}
else{
    //echo $file['name'];
    // print_r($file);
    // $des = 'files/'.$file['name'];
    // move_uploaded_file($file['tmp_name'],$des);
    

    //check file size <2MB = 2*1024*1024
    //check file type: png, jpg, gif, jpeg 
    //rename file
    if($file['size']<2*1024*1024){
        $name = $file['name'];
        $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
        $arrExt = ['png', 'jpg', 'gif', 'jpeg'];

        //a.png  => 2018-06-07-19-14-21-a.png
        if(in_array($ext, $arrExt)){
            $newName = date('Y-m-d-H-i-s-',time()).$name;
            move_uploaded_file($file['tmp_name'],"files/$newName");
            echo "success";
        }
        else{
            echo "File not allow";
        }
    }
    else{
        echo "File too large!!";    
    }
    
}



?>
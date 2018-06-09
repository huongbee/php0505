<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$file = $_FILES['image'];

//print_r($file);
//file size
//file type
//rename

//echo $file['size'][0];
foreach($file['size'] as $size){
    if($size > 300*1024){
        die('File too large');
    }
}
$arrExt = ['png','jpg','gif'];
foreach($file['name'] as $name){
    $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
    if(!in_array($ext, $arrExt)){
        die('File not allow!');
    }
}

foreach($file['tmp_name'] as $key=>$tmp_name){

    //a.png => 2018-06-09-18-50-34-a.png
    $newName = date('Y-m-d-H-i-s-',time()).$file['name'][$key];
    move_uploaded_file($tmp_name, "files/$newName");
}
echo 'uploaded!';

//unlink('files/2018-06-09-18-55-13-hinhlogo.png');

?>

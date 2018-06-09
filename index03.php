<div>
<?php

$file = fopen('test.txt','r');
$file02 = fopen('test02.txt','a+');

// w: clear old content
// a: continue 
if(isset($file) && isset($file02)){

    while($line = fgets($file)){
        // //fgetc($file)
        // echo $line;
        // echo "<br>";
        fwrite($file02,$line);
    }
    echo 'done!';
}
else{
    die('Can not open file ');
}

?>
</div>
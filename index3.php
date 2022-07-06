<?php
$file="data.txt";
if(file_exists($file)){
    $arr=file($file) or die ("ERROR: cannot open the file.");
    foreach($arr as $line){
        echo $line;
    }
}else{
    echo "  ERROR: File does not exists.";
}
?>
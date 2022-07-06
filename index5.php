<?php
$file="data.txt";
if(file_exists($file)){
    if(!rename($file,"file.tx")){
        echo "File renamed successfully.";
    }else{
        echo "ERROR: Cannot be renamed.";
    }
}else{
    echo "ERROR: File does not exist.";
}
?>
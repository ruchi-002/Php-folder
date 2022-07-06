<?php
$file="data.txt";
if(file_exists($file)){
    if(!unlink($file)){
        echo "File removed successsfully.";
    }else{
        echo "ERROR File cannot be removed.";
    }
}else{
    echo "ERROR: File does not exist.";
}
?>
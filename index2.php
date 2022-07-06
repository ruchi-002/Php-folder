<?php
$file="text.txt";
if(file_exists($file)){
    readfile($file) or die ("ERROR: Cannot open the file.");
}else{
    echo "ERROR: File does not exists.";
}
?>
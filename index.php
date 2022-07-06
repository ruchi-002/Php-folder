<?php 
$file="text.txt";
if(file_exists($file)){
    $handle=fopen($file,"r");
     or die ("ERROR Cannot open the file");
    fclose($handle);

}
else{
    echo "ERROR: File does not exists";
}
?>
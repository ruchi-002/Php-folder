<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hello</h1>
<?php
// store data file in file
$file="data.txt";
// check exist or not
if(file_exists($file)){
    // open dir or open file
    $handle=fopen($file,"r") or die ("ERROR: cannot opent the file");
    // store data
    $content=fread($handle,"40");
    // close file
    fclose($handle);
    // print data
    echo $content;
}else{
    echo "ERROR: File does not exist";
}
?>
</body>
</html>
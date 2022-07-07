<?php
$link=mysqli_connect("localhost","root","");
if($link===false){
    die ("ERROR: COULD NOT CONNECT . " .mysqli_connect_error());
}
$sql="CREATE DATABASE demo1";
if(mysqli_query($link,$sql)){
    echo "Database created successfully!";
}else{
    echo "ERROR:COULD NOT ABLE TO EXCECUTE $sql ." .mysqli_error($link);
}
mysqli_close($link);
?>
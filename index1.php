<?php
$link=mysqli_connect("localhost","root","","demo");
if($link ===false){
    die("error: could not connect ." .mysqli_connect_error());
}
$sql="CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";
if(mysqli_query($link,$sql)){
    echo "table created successfully!!";
}
else{
    echo "error could not able to execute $sql ." .mysqli_error($link);
}
mysqli_close($link);
?>
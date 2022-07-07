<?php
//connecting to the database
$servername="localhost";
$username="root";
$password="";
// create a connection
$connection=mysqli_connect($servername,$username,$password);
// create a db


//Die if connection was not successful
if(!$connection){
    die ("Error:". mysqli_connect_error());
}else{
    echo "connection was successfully!!"  . mysqli_get_host_info($connection) ;
}
$sql="CREATE DATABASE dbruchi";
mysqli_query($connection,$sql);
?>
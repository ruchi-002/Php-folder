<?php
// create connection
$link = mysqli_connect("localhost", 'root', '');

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

echo "connection to mysql was successful. Host info: " . mysqli_get_host_info($link);
// create database
$sql = "CREATE DATABASE IF NOT EXISTS user";

$nlink = mysqli_connect("localhost", 'root', '', 'user');



$sql = "CREATE TABLE IF NOT EXISTS todotable (
    id INT(20)  PRIMARY KEY AUTO_INCREMENT, 
    caption VARCHAR(30) NOT NULL,
    iscompleted BOOLEAN
    )";

if (mysqli_query($nlink,$sql)) {
    echo "New Table created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $caption = $_POST['todo'];
  
  $sql = "INSERT INTO todotable (caption, iscompleted)
  VALUES ('$caption', false)";

if (mysqli_query($nlink,$sql)) {
    echo "New Data Added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  header('location: todo.php');
?>

<!-- <?php
// Starting session
session_start();
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="contact.php" method="post">
        <label for="inputName">Enter your name:</label>
        <input type="text" name="username" id="inputName">
        <button type="submit">Submit</button>
</form>
<?php
    //  $_SESSION["username"]="ruchika sharma";
    //  echo $_SESSION["username"];
     if(!isset($_SESSION['username'])){
         echo "You are not logged in ";
     }
     else{
         echo "You are logged in ";
     }
    ?>
</body>
</html>
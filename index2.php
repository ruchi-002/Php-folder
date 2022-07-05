<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <body>
  <?php
    //remove all session variables
    echo "First name is " . $_SESSION["firstname"] . " .<br>";
    echo "Last name is  " .$_SESSION["lastname"] . " . " ;
    echo "<br>";
    session_unset();
    echo "First name is " . $_SESSION["firstname"] . " .<br>";
    echo "Last name is  " .$_SESSION["lastname"] . " . " ;
    echo "<br>";
    // destroy the session 
    session_destroy();
    echo "First name is " . $_SESSION["firstname"] . " .<br>";
    echo "Last name is  " .$_SESSION["lastname"] . " . " ;
    echo "<br>";

      
    
  ?>
  </body>
</html>
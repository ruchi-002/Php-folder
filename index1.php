<?php
session_start();
?>
<html>
    <body>
       <?php
       echo "First name is " . $_SESSION["firstname"] . " .<br>";
       echo "Last name is  " .$_SESSION["lastname"] . " . " ;
       ?>
    </body>
</html>
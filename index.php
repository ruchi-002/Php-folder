<?php
// Starting session
session_start();
?>
<html>
<body>
<?php
$_SESSION["firstname"]="ruchika";
$_SESSION["lastname"]="Sharma";
echo "The session variable are set up";


?>
</body>
</html>
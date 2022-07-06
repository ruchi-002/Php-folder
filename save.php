<?php
$file="my_file.txt";
file_put_contents($file,$_POST['data']." ",FILE_APPEND) or die("ERROR: Cannot write the file.");
echo file_get_contents($file);
echo "<br>";
echo " Data written to the file successfully."
?>
<?php
$file="note.txt";
$data="the quick borwn fox jumps over the lazy dog.";
file_put_contents($file,$data) or die ("ERROR: Cannot write the file.");
echo "Data written to the file successfully.";
?>
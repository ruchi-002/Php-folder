<?php
$file = "data.txt";
$fileContent = file_get_contents($file);
$todo_collection = unserialize($fileContent);
array_splice($todo_collection, $_REQUEST['todo'], 1);
$fileFromSystem = serialize($todo_collection);
file_put_contents($file, $fileFromSystem);
header("Location: {$_SERVER['HTTP_REFERER']}");
?>

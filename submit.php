<?php
$file="data.txt";
$filecontent=file_get_contents($file);
$todo_collection=unserialize($filecontent);
if(!$todo_collection){
    $todo_collection=[];
}
array_push($todo_collection,['caption'=>$_POST['todo'],'isCompleted' => false]);
$fileFromSystem=serialize($todo_collection);
file_put_contents('data.txt',$fileFromSystem);
 header("Location: {$_SERVER['HTTP_REFERER']}");
//echo $fileFromSystem;
?>
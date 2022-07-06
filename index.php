<?php

$a = array('1' => 'elem 1', '2' => 'elem 2', '3' => 'elem 3');
print_r($a);
echo "<br> <br>";
$b = serialize($a);
$c=unserialize($b);
print_r($b);
echo "<br> <br>";
print_r($c);

?>


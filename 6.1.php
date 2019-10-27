<?php
$arr = file('number_file.txt');
$a = count($arr);
$i = 0;
for($i = 0; $i!= $a; $i++){
$arr2 = explode(";", $arr[$i]);
$arr3 = explode (" ", $arr2[0]);
$sum = array_sum ($arr3);
$test1 = intval($sum / count($arr3));
$test2 = $sum % count($arr3);
$arr4 = explode (" ", $arr2[1]);
if ($test1 == $arr4[0] & $test2 == $arr4[1]){
	echo $arr[$i]  . "TRUE" . PHP_EOL;
} else {
echo  $arr[$i]  .  "FALSE" . PHP_EOL;
}
}
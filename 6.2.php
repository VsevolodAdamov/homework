<?php
$arr1 = [333, 1, 55555, 77];
$arr2 = [4444, 666666, 22, 77];

function subtraction ($arr1, $arr2){
$i=0;
for ($a = 0; $a < count($arr1); ++$a){
	if (strlen($arr1[$a]) > strlen($arr2[$a])){
		$number = strlen($arr1[$a]);
		$subtraction = strlen($arr1[$a]) - strlen($arr2[$a]);
	} elseif (strlen($arr2[$a]) > strlen($arr1[$a])) {
		$number = strlen($arr2[$a]);
		$subtraction = strlen($arr2[$a]) - strlen($arr1[$a]);
	} else {
		$number = "lines are equal";
	}
	//echo $number . PHP_EOL;
if ($i < $subtraction){
	$i = $subtraction;
}
}
return $i;
}
echo "subtraction ";
echo subtraction ($arr1, $arr2);

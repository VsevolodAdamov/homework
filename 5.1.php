<?php
echo "HW_5" . PHP_EOL;
define("FIVE", 5);
$arr = range(1, 100);
$i = 0;
foreach ($arr as $value) {
	if ($value%FIVE == 0){
		$i++;
	}
}
echo $i;
<?php
echo "HW_5" . PHP_EOL;
$time = microtime(true) . PHP_EOL;
$number = 2;
$sum = 0;
$n = 0;
define("FINISH", 1000);
function prime_number (&$number, &$sum, &$n){
	$divider = range(1, $number);
	$i = 0;
	foreach ($divider as $test) {
			if($number % $test == 0){
			++$i;
		}
	}
	if($i > 2){
		$number += 1;
	} else {
		$sum += $number;
		$n++;
		$number += 1;
	return $sum;
	return $number;
	}
}
while ($n != FINISH) {
	prime_number ($number, $sum, $n);
}
echo $sum . " SUM" . PHP_EOL ;
echo $end = microtime(true) - $time . PHP_EOL;
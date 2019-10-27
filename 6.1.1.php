<?php
$number = 5;
if($number > 0 & $number%2!=0) {
	foreach ((range (1 , $number)) as $value) {
		$_a = $number - $value;
		$arr1 = str_repeat ( " " , $_a);
		print_r ($arr1);
		$arr2 =  str_repeat ( "* " , $value) . PHP_EOL;
		print_r ($arr2);
	}
	foreach ((range ($number-1, 1)) as $value) {
		$_a = $number - $value;
		$arr1 = str_repeat ( " " , $_a);
		print_r ($arr1);
		$arr2 =  str_repeat ( "* " , $value) . PHP_EOL;
		print_r ($arr2);
	}
}
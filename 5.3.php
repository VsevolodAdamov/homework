<?php
echo "HW_5" . PHP_EOL;
$time = microtime(true) . PHP_EOL;
$sum=0;
$n=7919;
	$arr = []; 
	$arr[1] = 0;
	for($k=2; $k<=$n; $k++)
		$arr[$k]=1;
	for($k=2; $k*$k<=$n; $k++){
		if($arr[$k]==1){ 
			for($l=$k*$k; $l<=$n; $l+=$k){
				$arr[$l]=0;
				}
			}
		}
	foreach ($arr as $key => $value) {
		if ($value == 1){
			$sum+=$key;
		}
	}
echo $sum . " SUM" . PHP_EOL ;
echo $end = microtime(true) - $time . PHP_EOL;
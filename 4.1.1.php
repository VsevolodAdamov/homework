<?php


$my_arr = [1, 3, 4, 67, 6, 5, 45, 45, 43, 32, 34, 54, 32];
function search_n ($my_arr){
	$n = 0;
	foreach($my_arr as &$number){
   	 	if ($n <= $number){
		$n = $number;		
		} 
	}
	echo "$n";
}
search_n ($my_arr);

<?php
$my_arr = ['adf', 'asfsf', 'fsfdfd', 'ss', 'dsdsdsdsdsd', 'end'];
function search_n ($my_arr){
	$n = 0;
	foreach($my_arr as &$number){
	  	 	if (strlen($n) < strlen($number)){
   	 		$n = null;
   		    $n = $number;		
		} 
	}
	return "$n";
}
echo search_n ($my_arr);
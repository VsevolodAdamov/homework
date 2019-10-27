<?php

function search_l ($line,$search){
	foreach($line as $n){
	 	$f = mb_substr_count ($n, $search);
		echo "$f \n";
	}
}
print_r ($line = file('file.txt'));
$search = "d";
echo search_l ($line, $search);

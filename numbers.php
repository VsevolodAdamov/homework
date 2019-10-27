<?php


    function word (&$word){
    	if ($word == "zero") {
    		echo "0;";
   		} elseif ($word == "one") {
    		echo "1;"; 
    	} elseif ($word == "two") {
    		echo "2;";
    	} elseif ($word == "three") {
    		echo "3;";
    	} elseif ($word == "four") {
    		echo "4;";
    	} elseif ($word == "five") {
    		echo "5;";
    	} elseif ($word == "six") {
    		echo "6;";
    	} elseif ($word == "seven") {
    		echo "7;";
    	} elseif ($word == "eight") {
    		echo "8;";
    	} elseif ($word == "nine") {
    		echo "9;";
    	}
	}

 $file = fopen("chisla.txt" , "r");
  while (!feof($file)){
    $buffer = trim(fgets($file));
    $word  = explode(";", $buffer);
   echo (array_map(word, $word));	
 } 
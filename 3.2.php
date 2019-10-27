<?php
function increase (&$line, $increase){
$line = $line . $increase . "\n";
}

function write ($line){
    $file = fopen('data1.txt', 'a+');
    fwrite($file, $line);  
}

function open ($data, $increase, $file, $average_length){
  while (!feof($data)){
    $line = trim(fgets($data));
    increase ($line, $increase); // дописать что-то в строку
    $a = strlen(trim($line));
    if(strlen(trim($line))>$average_length){  
      $file = fopen('data1.txt', 'a+');
      fwrite($file, $line); // записать в файл
    }      
  }
}


$increase = "increase";
$data = fopen('file.txt', 'a+');
$file = fopen('data1.txt', 'w');
$array_data = file('file.txt');
$number_lins = count($array_data);
$sum_longs =(strlen(trim($increase))*$number_lins) + strlen(file_get_contents("file.txt"));
$average_length = $sum_longs/$number_lins;

open ($data, $increase, $file, $average_length); 
// $data - текст для  открытия, $increase - добавка к строке, $file - документ для записи результата, $average_length - длина минимальной строки для записи

fclose ($file);
fclose ($data);
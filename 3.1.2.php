<?php
//file.txt - файл с данными
//data.txt - файл для сохранения
$file = file('file.txt');
$data = fopen('data.txt', 'w');
$i = 0;
while ($i<count($file)) {
  fwrite($data, $file[$i]); 
  $i+=2;
}
fclose($data);
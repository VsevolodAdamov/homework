<?php
//file.txt - файл с данными
//data.txt - файл для сохранения
<?php
function write ($file, &$data, &$i){
fwrite ($data, $file[$i]); 
  $i+=1;
}
function open (&$file, &$data, &$i){
$file = file('file.txt');
$data = fopen('data.txt', 'w');
$i=-1;
}

$file="";
$data="";
$i="";
open ($file, $data, $i);
while ($i++<count($file)) {
  write ($file, $data, $i);
  var_dump ($i);
}
fclose($data);
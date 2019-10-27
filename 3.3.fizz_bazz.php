<?php
function F_B ($fizz, $bazz, $number){
     $file = fopen('data2.txt', 'a+');      
      foreach (range(1, $number) as $object) {
        if (($object%$bazz == 0) && ($object % $fizz == 0)) {
          fwrite($file, "FIZZBAZZ ");
        }elseif ($object%$bazz == 0){
          fwrite($file, "BAZZ ");
        }elseif ($object % $fizz == 0){
          fwrite($file, "FIZZ ");
        }else{
          fwrite($file, "$object ");
        }
        if ($object == $number){
          fwrite($file, "\n");
        }
      }
    }

function f_b_start ($data){
  while (!feof($data)){
    $buffer = trim(fgets($data));
    $fb = explode(" ", $buffer);
    $fizz = trim($fb[0]);
    $bazz = trim($fb[1]);
    $number = trim($fb[2]);
   F_B ($fizz, $bazz, $number);
  }
}

$data = fopen('fizz_bazz_data.txt', 'r+');
f_b_start ($data);
fclose($data);
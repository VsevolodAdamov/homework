<?php
 echo "вводите по очереди 3 числа (fizz,bazz,number)\n";
 $handle = fopen ("php://stdin","r");
 $fizz = trim(fgets($handle));
 $bazz = trim(fgets($handle));
 $number = trim(fgets($handle));
foreach (range(1, $number) as $object) {
    if (($object%$bazz == 0) && ($object % $fizz == 0)) {
      echo "FIZZBAZZ ";
    }elseif ($object%$bazz == 0){
      echo "BAZZ ";
    }elseif ($object % $fizz == 0){
      echo "FIZZ ";
    }else{
    echo "$object ";
    }
}
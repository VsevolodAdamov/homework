<?php

 echo "вводите по очереди 3 числа (fizz,bazz,number)\n";
 $handle = fopen ("php://stdin","r");
 $fizz = trim(fgets($handle));
 $bazz = trim(fgets($handle));
 $number = trim(fgets($handle));
foreach (range(1, $number) as $object) {
  echo (($object%$bazz == 0) && ($object % $fizz == 0)? "FIZZBAZZ " : ($object%$bazz == 0 ? "BAZZ " : ($object % $fizz == 0? "FIZZ " : $object . " ")));
}
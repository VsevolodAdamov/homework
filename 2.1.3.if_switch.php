<?php

echo "Give it to me!\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

switch ($number > 1000) {
    case true:
      echo "\n!!!!WOOOOWWWW!!!\n";
      break;
      }
switch (($number > 100)&&($number < 1001)) {
    case true:
      echo "Thanks, man!";
      break;
      }
switch (($number > 10) && ($number < 100)) {
      case true:
      echo "OK :(";
       break;
      }
switch (($number < 11) || ($number == 100)) {
    case true:
      echo "WHAAAAT????";
      break;
      }
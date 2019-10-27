<?php
echo "number\n";
$handle = fopen ("php://stdin","r");
$number = trim(fgets($handle));
$on_the_floor = 4;
$number_of_floors = 5;
$in_the_porch = $on_the_floor * $number_of_floors;
$porch = $number / $in_the_porch;
    echo ceil($porch) . " подъезд, ";
$rotd_porch = $number % $in_the_porch;
$floor = $rotd_porch/$number_of_floors;
if ($rotd_porch == 0) {
  echo "5 этаж";
} else {
    echo ($floor < 1)  ? "1 этаж" : ceil($floor) . " этаж\n";
}
<?php
//определем атракционы в парке по возрасту
//от 7 до 14 - "детская зона"
//от 1 до 6 - "только в сопровождении взрослого"
//от 15 - "взрослая зона"

echo "Indicate your age!\n";
$handle = fopen ("php://stdin","r");
$age = fgets($handle);
if ($age <= 6) {
  echo "только в сопровождении взрослого";
} elseif ($age > 6 && $age <=14) {
  echo "детская зона";
} else { 
  echo "взрослая зона";
}
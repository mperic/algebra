<?php

// While petlja primjer
$number = 10;
while ($number < 20) {
  echo($number . "<br>");
  $number++;
}

// Beskonacna petlja
//while ($number < 100) {
//  echo($number . " ");
// }

// ispis svih neparnih do 100
echo("<hr>");
$i = 1;
while ($i<100) {
  if ($i % 2 != 0) {
    echo($i . " ");
  }
  $i++;
}
<?php

function isPrimeNumber($number) {
  
  $divisionCounter = 0;
  for($i = 1; $i<=$number; $i++) {
    if ($number % $i == 0) {
      $divisionCounter++;
    }
  }

  if ($divisionCounter == 2) {
    return true;
  }
  return false;
}


echo "17 is prime: " . isPrimeNumber(17)  . "<br>";
echo "18 is prime: " . isPrimeNumber(18) . "<br>";
echo "22 is prime: " . isPrimeNumber(22) . "<br>";
echo "27 is prime: " . isPrimeNumber(27) . "<br>";
echo "47 is prime: " . isPrimeNumber(47) . "<br>";
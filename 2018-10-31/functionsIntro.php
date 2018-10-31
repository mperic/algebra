<?php

//Introduction to functions

// Sum of 2 numbers
function sum($a, $b) {
  return $a + $b;
}

function echoSymbolNTimes($symbol, $n) {
  for($i = 0; $i<$n; $i++) {
    echo $symbol;
  }
}

echo sum(10,5);

echoSymbolNTimes("X", 50);
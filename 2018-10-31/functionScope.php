<?php

// Function scope

function scopeTest1($s) {

}

echo $s; // Undefined variable

function scopeTest2($a) {
  $a = 10;
  return $a;
}

$a = 5;
echo "a: " . $a . "<br>";
echo "function: " . scopeTest2($a) . "<br>";
echo "a: " . $a . "<br>";

function scopeTest3() {
  echo $a;
}

scopeTest3();
<?php

// Function scope

function scopeTest1($s) {

}

// echo $s; // Undefined variable

function scopeTest2($a) { // ovaj "a" nije isti kao a u globalnom dijelu skripte
  $a = 10;
  return $a;
}

$a = 5;
echo "a: " . $a . "<br>";
echo "function: " . scopeTest2($a) . "<br>";
echo "a: " . $a . "<br>";

function scopeTest3() {
  // echo $a; // nije moguce
}

scopeTest3();

function scopeTest4(&$ref) {
  $ref = 10;
}

echo "<hr>";
$abc = 5;
echo "Before: " . $abc;
scopeTest4($abc);
echo "After: " . $abc;

function scopeTest5() {
  global $abc;
  echo "ABC: " . $abc;
}

echo "<br>";
echo "scope5 " . scopeTest5();

function scopeTest6() {
  return $GLOBALS['abc'];
}

echo "<br>";
echo "scope6 " . scopeTest6() . "<br>";

function scopeTest7() {
  static $n = 5;
  echo "n1: " . $n . "<br>";
  $n++;
  echo "n2: " . $n . "<br>";
}

scopeTest7();
scopeTest7();
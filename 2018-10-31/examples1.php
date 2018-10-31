<?php

//kreirati funckiju koja je mali kalkulator
//Prima simbol i dva broja i ovisno o simbolu
// vrati rezultat 
//(zbrajanje, oduzimanje, mnozenje, dijeljenje
function calc($symbol, $firstNumber, $secondNumber) {
  switch ($symbol) {
    case "+":
      return $firstNumber + $secondNumber;
    case "-":
      return $firstNumber - $secondNumber;
    case "*":
      return $firstNumber * $secondNumber;
    case "/":
      return $firstNumber / $secondNumber;
    default:
      return null;
  }
}

echo "10 + 5 = " . calc("+", 10, 5) . "<br>";
echo "10 - 5 = " . calc("-", 10, 5) . "<br>";
echo "10 * 5 = " . calc("*", 10, 5) . "<br>";
echo "10 / 5 = " . calc("/", 10, 5) . "<br>";

echo "<hr>";

//Nacrtati kvadrat N velicine
// Primjer s defaultnim parametrom
function drawSquare($size, $symbol = "X") {
  for ($i = 0; $i<$size; $i++) {
    for ($j = 0; $j<$size; $j++) {
      echo $symbol;
    }
    echo "<br>";
  }
}

drawSquare(5);

echo "<hr>";

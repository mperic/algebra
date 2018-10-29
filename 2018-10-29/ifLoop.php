<?php
// Primjer FOR petlje
for ($i = 0; $i < 10; $i++) {
  echo($i . "<br>");
}

echo "<hr> Parni do 100:  ";

// Zadatak ispisi sve parne brojeve od 1 do 100
for ($i = 1; $i <= 100; $i++) {
  if ($i%2==0) {
    echo($i . ", ");
  }
}

// Fibonnaci sequence
echo "<hr> Fibonacci:  ";
$firstNumber = 0;
$secondNumber = 1;
echo "0, 1, ";

for ($i = 0; $i<10; $i++) {
  $thirdNumber = $firstNumber + $secondNumber;
  echo($thirdNumber . ", ");

  $firstNumber = $secondNumber;
  $secondNumber = $thirdNumber;
}

// Tablica mnozenja 10x10
echo "<hr>";
for ($i = 1; $i<=10; $i++) {
  for ($j = 1; $j<=10; $j++) {
    echo(($i * $j) . " ");
  }
  echo("<br>");
}

?>


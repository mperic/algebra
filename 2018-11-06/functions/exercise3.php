<?php

function createSentence($name, $city, $age) {
  return $name . " iz grada " . $city . " ima " . $age . " godina.";
}

echo createSentence("Marko", "Zagreb", "30") . "<br>";
echo createSentence("Ivan", "Split", "25") . "<br>";;
echo createSentence("Maja", "Rijeka", "20") . "<br>";;
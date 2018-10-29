<?php

//foreach example
$arr = [10,20,30];

foreach ($arr as $el) {
  echo($el . ", ");
}

echo("<hr>");

$people = [
  [1, "Ivan", "Ivic"], 
  [2, "Pero", "Peric"], 
  [3, "Marko", "Markic"]
];

foreach ($people as $person) {
  echo("ID: " . $person[0] . 
  ", Ime: " . $person[1] .
  ", Prezime: " . $person[2] .
  "<br>");
}

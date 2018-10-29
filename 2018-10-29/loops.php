<?php
// Primjer FOR petlje
for ($i = 0; $i < 10; $i++) {
  echo($i . "<br>");
}

echo "<hr>";

// Zadatak ispisi sve parne brojeve od 1 do 100
for ($i = 1; $i <= 100; $i++) {
  if ($i%2==0) {
    echo($i . ", ");
  }
}

?>
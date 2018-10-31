<?php

// working with txt files

if(!file_exists("files/pero.txt")) {
  die("Nema je, otisla je, zauvijek!");
} 
//else {
  //"Nasao sam datoteku!";
//}

//echo "Provjera radi li die()";

$file = fopen("files/pero.txt", "r");
//var_dump($file);
// Dohvat cijele datoteke
echo fread($file, filesize("files/pero.txt"));
fclose($file);

// citanje linije po liniju - 1. nacin
echo "<hr>";
$file = fopen("files/pero.txt", "r");

while (!feof($file)) {
  $line = fgets($file);
  echo $line . "<br>";
}
fclose($file);

// Citanje linije po linije - pristup 2
echo "<hr>";
$file = fopen("files/pero.txt", "r");

while (($line = fgets($file)) !== false) {
  echo $line . "<br>";
}

fclose($file);

// Upisivanje u txt datoteku

$file = fopen("files/pero.txt", "a");
fwrite ($file, "\n Kamion");
fclose($file);
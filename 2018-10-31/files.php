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


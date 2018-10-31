<?php

// na svako ucitavanje skripte mi prikazi
// na ekranu sve sta pise u njoj i 
// onda mi jos dodaj trenutni unix timestamp

$filePath = "files/unix.txt";

if (!file_exists($filePath)) {
  $handle = fopen($filePath, 'a'); // kreiramo datoteku ako ne postoji
  fclose($handle);
}

$handle = fopen($filePath, 'r');
echo "<hr>";
while(($line = fgets($handle)) !== false) {
  ?>
  <p>
  <?php
    echo $line;
  ?>
  </p>
  <?php
}
fclose($handle);

$handle = fopen($filePath, 'a');
fwrite($handle, "\n".time());
fclose($handle);


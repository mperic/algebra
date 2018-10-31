<?php

require_once "unix3.php";

//examples2.php samo lijepse

$filePath = "files/unix3.txt";

if (!fileExists($filePath)) {
  createFile($filePath);
}

writeUnixTimestamp($filePath);

foreach (readUnixTimestamp($filePath) as $row) {
  echo "<p>" . $row . "</p>";
}



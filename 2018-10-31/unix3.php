<?php

function fileExists($filePath) {
  if( file_exists($filePath) ) {
    return true;
  } 
  return false;
}

function createFile($filePath) {
    $handle = fopen($filePath, 'a');
    fclose($handle);
}

function readUnixTimestamp($filePath) {
  $handle = fopen($filePath, 'r');
  $arr = [];

  while(($line = fgets($handle)) !== false) {
    if(strlen(trim($line))>0) {
      array_push($arr, $line);
    }
  }
  fclose($handle);

  return $arr;
}

function writeUnixTimestamp($filePath) {
  $handle = fopen($filePath, 'a');
  fwrite($handle, "\n".time());
  fclose($handle);
}
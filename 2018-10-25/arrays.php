<?php

$arr1 = array("BMW", "Audi", "Mercedes");
$arr2 = [];

//echo($arr1); //simulacija greske
sort($arr1); // sortiraj od najmanjeg do najveceg
var_dump($arr1);
echo("<br>");
rsort($arr1); //sort od najveceg prema najmanjem
var_dump($arr1);
echo("<br>");
?>
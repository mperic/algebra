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

// Sortiranje uz zadrzavnaje indeksa
asort($arr1);
var_dump($arr1);
echo("<br>");
arsort($arr1);
var_dump($arr1);
echo("<br>");

// prebrojavanje elemenata
echo("Count: ");
echo(count($arr1));
echo("<br>");

// explode i implode
var_dump(explode("-", "Ivan-Ivic-30"));
echo("<br>");
echo(implode($arr1));
echo("<br>");
echo(implode("*", $arr1));

echo("<br> 3D polje <br>");
$arr10 = [10];
$arr11 = [11];
$arr20 = [$arr10, $arr11];

var_dump($arr20);
?>
<?php

require_once("model/Car.php");

$c1 = new Car("Kia", "Stinger", "2018", "150");

echo "<p> {$c1->getManufacturer()} </p>";
echo "<p> {$c1->getModel()} </p>";
echo "<p> {$c1->getYear()} </p>";
echo "<p> {$c1->getKW()} </p>";
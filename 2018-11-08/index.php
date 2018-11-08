<?php

require_once 'model/Vehicle.php';
require_once 'model/Airplane.php';
require_once 'model/Bicycle.php';
require_once 'model/Car.php';
require_once 'model/Truck.php';

/*
$vehicle = new Vehicle();
var_dump($vehicle);
$vehicle->wheelsCount = 0;
*/

$airplane = new Airplane();
var_dump($airplane);

$airplane->drive();
echo "<br>";
$airplane->talkToControlTower("Howdy folks");

echo "<br>";
$bicycle = new Bicycle(5);
$bicycle->drive();
var_dump($bicycle);

echo "<br>";
$car = new Car();
$car->setIsCabrio(TRUE);
echo "<br>";
$car->drive();
var_dump($car);

echo "<br>";
Truck::beepBeep();
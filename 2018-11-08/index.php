<?php

require_once 'model/Vehicle.php';
require_once 'model/Airplane.php';
require_once 'model/Bicycle.php';

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

$bicycle = new Bicycle();
$bicycle->drive();
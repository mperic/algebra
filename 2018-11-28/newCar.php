<?php

require_once("model/Car.php");
session_start();

setcookie("ime", "pero");

//var_dump($_REQUEST);

$car = new Car(
  $_POST["manufacturer"],
  $_POST["model"],
  $_POST["year"],
  $_POST["kW"]
); 

$_SESSION["manufacturer"]=$car->getManufacturer();

var_dump($car);

session_destroy();

var_dump($_COOKIE);
$ime = $_COOKIE["ime"];
echo "Ime: " . $ime;


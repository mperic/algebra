<?php

require_once("model/Car.php");

//var_dump($_REQUEST);

$car = new Car(
  $_GET["manufacturer"],
  $_GET["model"],
  $_GET["year"],
  $_GET["kW"]
); 

var_dump($car);

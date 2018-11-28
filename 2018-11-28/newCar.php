<?php

require_once("model/Car.php");

//var_dump($_REQUEST);

$car = new Car(
  $_REQUEST["manufacturer"],
  $_REQUEST["model"],
  $_REQUEST["year"],
  $_REQUEST["kW"]
); 

var_dump($car);

db->save/()
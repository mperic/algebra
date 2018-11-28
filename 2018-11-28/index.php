<?php

require_once("model/Car.php");

session_start();

var_dump($_SESSION);
/*
$c1 = new Car("Kia", "Stinger", "2018", "150");

echo "<p> {$c1->getManufacturer()} </p>";
echo "<p> {$c1->getModel()} </p>";
echo "<p> {$c1->getYear()} </p>";
echo "<p> {$c1->getKW()} </p>";
*/

?>

<html>

  <head>
  
  </head>

  <body>
    <form action="newCar.php" method="POST">
      <label>Manufacturer:</label>
      <input type="text" name="manufacturer">
      <br>
      <label>Model: </label>
      <input type="text" name="model">
      <br>
      <label>Year: </label>
      <input type="text" name="year">
      <br>
      <label>kW: </label>
      <input type="text" name="kW">
      <br>
      <input type="submit" value="Save new car">
    </form>
  </body>
</html>
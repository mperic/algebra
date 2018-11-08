<?php

require_once "DriveInterface.php";

class Vehicle implements DriveInterface {
  protected $wheelsCount;
  protected $steeringWheel;
  protected $maxSpeed;

  public function drive() {
    echo $this->getDrivingText();
   }

   private function getDrivingText() {
     return "The vehicle is driving!";
   }
}
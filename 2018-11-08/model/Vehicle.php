<?php

class Vehicle {
  protected $wheelsCount;
  protected $steeringWheel;
  protected $maxSpeed;

  private function drive() {
    echo "The vehicle is driving!";
   }
}
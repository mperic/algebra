<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle {
  public $trainingWheelsCount;

  function __construct($numberOfTrainingWheels) {
    if ($numberOfTrainingWheels<0) {
      die("Number of wheels must be 0 or greater");
    }

    $this->trainingWheelsCount = $numberOfTrainingWheels;
  }
}
<?php

require_once 'Vehicle.php';

class Car extends Vehicle {
  private $isCabrio;

  function __construct() { }

  public function getIsCabrio() {
    return $this->isCabrio;
  }

  public function setIsCabrio($value) {
    if ($value === TRUE) {
      $this->isCabrio = TRUE;
    } else {
      $this->isCabrio = FALSE;
    }
  }

  public function drive() {
    if ($this->isCabrio) {
      echo "Driving a convertible car.";
    } else {
      echo "Driving a standard car.";
    }
  }
}
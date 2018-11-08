<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {
  public static function beepBeep() {
    echo "Beep Beep";
  }
}
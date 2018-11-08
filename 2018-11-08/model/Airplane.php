<?php

require_once 'Vehicle.php';

class Airplane extends Vehicle {
  public $wingsCount;
  public $wingsSpan;
  
  public function talkToControlTower($textToTalk) {
    echo "Airplane to control center: " . $textToTalk;
  }

  public function drive() {
    echo "The airplane is flying";
  }
}
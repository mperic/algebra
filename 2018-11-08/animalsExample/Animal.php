<?php

require_once "AnimalStuff.php";

class Animal implements AnimalStuff {
  public function makeNoise() {
    echo "Making some noise!";
  }

  public function eat() {
    echo "I am eating!";
  }
}
<?php

require_once "Animal.php";

class Dog extends Animal {
  
  public function bark() {
    echo "I am barking.";
  }
}
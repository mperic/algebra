<?php

require_once "Animal.php";

class Cat extends Animal {
  
  public function purr() {
    echo "I am purring.";
  }
}
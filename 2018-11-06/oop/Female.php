<?php

require_once "Human.php";

class Female extends Human { // nasljedivanje - extending
  private $age;
  // enkapsulacija - encapsulation
  function setAge($age) {
    $this->age = $age;
  }

  function getAge() {
    return $this->age;
  }

  function giveBirth() {
    echo "Giving birth";
  }
}
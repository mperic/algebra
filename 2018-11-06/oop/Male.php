<?php

require_once "Human.php";

class Male extends Human { // nasljedivanje - extending

  public $age;

  //public $test;
  private $test;
  //protected $test;

  function digMine() {
    echo "I'm digging a mine.";
  }
}
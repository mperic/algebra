<?php

class Human {
  // Svojstva tj property objekata
  private $age = "";
  public $height = "";

  // metoda walk
  function walk() {
    echo "Moved 1 step.";
  }

  // metoda speak
  function speak($what) {
    echo $what;
  }
}
/*
$human1 = new Human(); // Kreiramo objekt iz klase Human. Pozivamo konstruktor
$human1->age = 25;
$human1->height=180;
var_dump($human1);

$human1->walk(); // pozivamo metodu nad objektom

echo "<hr>";

$human2 = new Human();
$human2->age=30;
$human2->height=190;
var_dump($human2);
*/
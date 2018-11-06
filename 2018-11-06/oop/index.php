<?php

require_once "Male.php";
require_once "Female.php";

$male = new Male(); // poziv konstruktora Male klase
$male->walk(); // poziv metode iz Human klase
$male->speak("Ja sam musko!"); // poziv iz Human klase
$male->digMine(); // poziv metode iz Male klase¸
$male->age = 100;
echo "<br> TEST: <br>";
//var_dump($male);
//$male->test = "abc";
//echo "Test: " . $male->test;
//$male->giveBirth(); - primjer poziva nepostojece metode
echo $male->age;
echo "<hr>";

$female = new Female(); // poziv konstruktora Female klase
$female->walk();
$female->speak("ja sam zensko!");
$female->giveBirth();
$female->age = 20;
$female->setAge(50);
<?php

require_once "Dog.php";
require_once "Cat.php";

$dog = new Dog();
var_dump($dog);
echo "<br>";
$dog->makeNoise();
echo "<br>";
$dog->eat();
echo "<br>";
$dog->bark();

echo "<hr>";

$cat = new Cat();
var_dump($cat);
echo "<br>";
$cat->makeNoise();
echo "<br>";
$cat->eat();
echo "<br>";
$cat->purr();
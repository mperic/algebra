<?php

$ivanData = array(
  "id"=>1, 
  "firstName"=>"Ivan",
  "lastName"=>"Ivic");

$peroData = array(
  "id"=>2, 
  "firstName"=>"Pero",
  "lastName"=>"Peric");

$markoData = array(
  "id"=>3, 
  "firstName"=>"Marko",
  "lastName"=>"Markic");

$people = [$peroData, $ivanData, $markoData];

//var_dump($people);

foreach ($people as $person) {
  echo(
    "ID: " . $person["id"] . 
    " First name: " . $person["firstName"] .
    " Last name: " .$person["lastName"] .
    "<br>"
  );
}

//Zadatak 1 - ispisi sve do Ivana
echo("<hr>");
foreach ($people as $person) {
  echo(
    "ID: " . $person["id"] . 
    " First name: " . $person["firstName"] .
    " Last name: " .$person["lastName"] .
    "<br>"
  );

  if ($person["firstName"] == "Ivan") {
    break;
  }
}

// Ispisi sve osobe koje se zovu Ivan
echo("<hr>");
foreach ($people as $person) {
  if ($person["firstName"] != "Ivan") {
    continue;
  }
  echo(
    "ID: " . $person["id"] . 
    " First name: " . $person["firstName"] .
    " Last name: " .$person["lastName"] .
    "<br>"
  );
}
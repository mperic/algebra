<?php

// Napravi listu/polje od 10 elemenata
// Ispisi ih pomocu FOR petlje.

$array = [5,10,15,7,17,22,34,88,99,100];

for ($i = 0; $i<10; $i++) {
  echo($array[$i] . ", ");
}

// zadatak - napravi polje sa 3 unutarnja polja. 
// Svako unutarnje polje predstavlja osobu.
// svaka osoba ima ime, prezime, postanski broj i grad
// Ispisati van koristeci HTML kao tablicu
echo("<hr>");
$people = [
  array("fname"=>"Sasa", "lname"=>"Fajkovic", "postalCode"=>"10000", "city"=>"Zagreb"),
  array("fname"=>"Ivan", "lname"=>"Ivic", "postalCode"=>"47000", "city"=>"Karlovac"),
  array("fname"=>"Marko", "lname"=>"Markic", "postalCode"=>"51000", "city"=>"Rijeka")
];

echo("<table>");
  echo("<tr>");
    echo("<th>Imenik</th>");
  echo("</tr>");
  echo("<tr>");
    echo("<th>Ime</th>");
    echo("<th>Prezime</th>");
    echo("<th>Postanski broj</th>");
    echo("<th>Grad</th>");
  echo("</tr>");

  foreach($people as $person) {
    echo("<tr>");
    echo("<td>" . $person["fname"] . "</td>");
    echo("<td>" . $person["lname"] . "</td>");
    echo("<td>" . $person["postalCode"] . "</td>");
    echo("<td>" . $person["city"] . "</td>");
  echo("</tr>");
  }

echo("</table>");

?>


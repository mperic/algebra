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

?>

<table>
  <tr>
    <th>Imenik</th>
  </tr>
  <tr>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Postanski broj</th>
    <th>Grad</th>
  </tr>

<?php
  foreach($people as $person) {
    echo("<tr>".
    "<td>" . $person["fname"] . "</td>".
    "<td>" . $person["lname"] . "</td>".
   "<td>" . $person["postalCode"] . "</td>".
   "<td>" . $person["city"] . "</td>".
  "</tr>");
  }

  ?>

</table>

<?php

// Imamo CSV string 
// Sasa,Fajkovic,29,Matea,Mateic,30,Ivan,Ivic,31
// String prebaciti u polje, 
// iterirati kroz polje i onda 
// ispucati van na ekran da je svaka osoba u svom redu

$data = "Sasa,Fajkovic,29,Matea,Mateic,30,Ivan,Ivic,31";

$arr = explode(",", $data);

for ($i=0; $i < sizeof($arr); $i++) { 
  if ($i%3==0) {
    echo("<br>");
  }

  echo($arr[$i] . " ");
}
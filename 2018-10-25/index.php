<?php

$a = 5; // Kreiramo varijablu i dodajemo joj vrijednost
$b = 10;
$c = $a + $b; // zbrajamo dvije vrijednosti

echo($c); //  Ispis varijable
echo("<br>"); // ispis novog reda

$name = "Sasa"; // Kreiramo varijablu i dodajemo joj string podataka
echo($name);
echo("<br>");
var_dump($name); // var dump funkcija prikazuje sve informacije o varijabli
echo("<br>");

$array = [19, 48, 96]; // kreiramo polje
var_dump($array);
echo("<br>");
echo($array[2]); // pristup elementu polja po indeksu
// echo $array[3] // pristup elementu koji ne postoji
echo("<br>");

echo("Modulo: ");
echo(9 % 7); // modulo

echo("<br>");
echo("Boolean");
echo("<br>");

echo("3==3 " . (3==3)); // usporedba
echo("<br>");

echo("3=='3' " . (3=="3")); // usporedba
echo("<br>");

echo("3===3 " . (3===3)); // usporedba
echo("<br>");

echo("3==='3' " . (3==="3")); // usporedba
echo("<br>");

git test
?>
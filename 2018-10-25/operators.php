<?php
  // klasicne matematicke operacije + - / *
  // modulo % 
  // usporedbe < > <= => == ===
  // logicki operatori:
  // logicko i / AND =  && 
  // logicko ili / OR =  || 
  // negacija / NOT =  !

  echo("AND ");
  echo(1<5 && 10<50);
  echo("<br>");

  echo("AND ");
  echo(1>5 && 10<50);
  echo("<br>");

  echo("AND ");
  echo(1>5 && 10>50);
  echo("<br>");

  echo("OR ");
  echo(1<5 || 10<50);
  echo("<br>");

  echo("OR ");
  echo(1>5 || 10<50);
  echo("<br>");

  echo("OR ");
  echo(1>5 || 10>50);
  echo("<br>");

  echo("INVERSE ");
  echo(!(1<5 || 10<50));
  echo("<br>");

  echo("INVERSE ");
  echo(!(1>5 || 10<50));
  echo("<br>");

  echo("INVERSE ");
  echo(!(1>5 || 10>50));
  echo("<br>");

  echo("SPAJANJE" . " " . (!(1>5)));

  echo("<br>" . "NULL" . "<br>");
  $n = NULL;
  echo($n);
  var_dump($n);

?>
<?php

  $number = 9;

  if ($number > 15) {
    echo("Entered IF");
  } else if ($number > 10) {
    echo("Entered ELSE IF");
  } else {
    echo("Entered ELSE");
  }

  echo("<br>");

  // switch

  switch($number):
    case 9:
      echo("Nine");
      break;
    case 10:
      echo("Ten");
      break;
    default:
      echo("Default");
  endswitch;

?>
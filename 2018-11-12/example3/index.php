<?php

function formatRegistrationPlate($plate) {
  if (strlen($plate) == 10) {

    if (strpos($plate, " ")) {
      return str_replace(" ", "#", $plate);
    } else if (strpos($plate, "-")) {
      return str_replace("-", "#", $plate);
    }
  } else if (strlen($plate) == 8) {
    return substr($plate,0,2) . "#" . substr($plate,2,4) . "#" . substr($plate,6,2);
  } else {
    die("krivi unos");
  }
}

echo "ZG 1234 XY = " . formatRegistrationPlate("ZG 1234 XY") . "<br>";
echo "ZG-1234-XY = " . formatRegistrationPlate("ZG-1234-XY") . "<br>";
echo "ZG1234XY = " . formatRegistrationPlate("ZG1234XY") . "<br>";
echo "ZG-1234-XY PERO = " . formatRegistrationPlate("ZG-1234-XY PERO") . "<br>";
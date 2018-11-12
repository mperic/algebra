<?php

function validateNumber($number) {
  $number = str_replace(" ","",$number);
  $number = str_replace("-","",$number);

  if(strpos($number, "+385") !== FALSE) {
    if (strpos($number, "9") != 4 || !is_numeric($number[5])) {
      return "Invalid";
    }

    $secondPart;
    if ($number[6] == "/") {
      $secondPart = substr($number, 7, 100);
    } else {
      $secondPart = substr($number, 6, 100);
    }

    if(is_numeric($secondPart)) {
      return "Valid";
    }
    return "Invalid";

  } else if (strpos($number, "0") === 0 && strpos($number, "9") === 1) {

    $secondPart;
    if ($number[3] == "/") {
      $secondPart = substr($number,4,100);
    } else {
      $secondPart = substr($number,5,100);
    }

    if (is_numeric($secondPart)) {
      return "Valid";
    }
     return "Invalid";

  }
  return "Invalid";
}

echo "+385912220991 = " . validateNumber("+385912220991") . "<br>";
echo "+385 91 222 0991 = " . validateNumber("+385 91 222 0991") . "<br>";
echo "+385  91   222   0991 = " . validateNumber("+385  91   222   0991") . "<br>";
echo "+385 91/222 0991 = " . validateNumber("+385 91/222 0991") . "<br>";
echo "+385 91/222-0991 = " . validateNumber("+385 91/222-0991") . "<br>";
echo "+385 91/2220991 = " . validateNumber("+385 91/2220991") . "<br>";
echo "+385 11/2220991 = " . validateNumber("+385 11/2220991") . "<br>";
echo "+385 01 2220991 = " . validateNumber("+385 01/2220991") . "<br>";
echo "+385 091 2220991 = " . validateNumber("+385 091/2220991") . "<br>";
echo "0912220991 = " . validateNumber("0912220991") . "<br>";
echo "091 222 0991 = " . validateNumber("091 222 0991") . "<br>";
echo "091/222 0991 = " . validateNumber("091/222 0991") . "<br>";
echo "091 222-0991 = " . validateNumber("091 222-0991") . "<br>";
echo "091/222-0991 = " . validateNumber("091/222-0991") . "<br>";
echo "091/222-09a91 = " . validateNumber("091/222-09a91") . "<br>";
echo "091/2220 991 = " . validateNumber("091/2220 991") . "<br>";
echo "091/2220-991 = " . validateNumber("091/2220-991") . "<br>";
echo "091 2220 991 = " . validateNumber("091 2220 991") . "<br>";
echo "091 2220-991 = " . validateNumber("091 2220-991") . "<br>";
echo "01/222-0991 = " . validateNumber("01/222-0991") . "<br>";
echo "01 222 0991 = " . validateNumber("01 222 0991") . "<br>";
echo "abc = " . validateNumber("abc") . "<br>";
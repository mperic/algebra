<?php

require_once "data.php";
require_once "Motorcycle.php";

$motorcyclesList = [];

foreach ($data as $row) {
  $moto = new Motorcycle(
    $row['manufacturer'],
    $row['model'],
    $row['color'],
    $row['singleSeat']
  );
  array_push($motorcyclesList, $moto);


}

?>

<html>
  <head>
    <title>Motori</title>
    <style>
      table, th, td {
        border: 1px solid black;
      }
    
    </style>
  </head>
  <body>
    <table>

<?php
  foreach($motorcyclesList as $moto) {
    echo "<tr>";
      echo "<td>" . $moto->manufacturer . "</td>";
      echo "<td>" . $moto->model . "</td>";
      echo "<td>" . $moto->color . "</td>";
      echo "<td> <select>";

      if ($moto->isSingleSeat == 'Yes') {
        echo "<option selected value=Yes>Yes</option>";
      } else {
        echo "<option value=Yes>Yes</option>";
      }

      if ($moto->isSingleSeat == 'No') {
        echo "<option selected value=No>No</option>";
      } else {
        echo "<option value=No>No</option>";
      }

      echo "</select> </td>";


    echo "</tr>";
  }
?>

    </table>
    
  </body>
</html>

<?php
// date format conversion example
// make function that changes 10.05.1989 to 1989-05-10

function dateConversion ($input) {
 /*  $exploded = explode(".", $input);
  $reversed = array_reverse($exploded);
  $imploded = implode("-", $reversed);
  
  return $imploded; */

  return implode("-", array_reverse(explode(".", $input)));
}

echo dateConversion("10.05.1989");
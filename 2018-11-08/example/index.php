<?php

require_once "data.php";

?>

<html>
  <head>
    <title>Motori</title>
    <style>
    
    </style>
  </head>
  <body>
    <table>

<?php
  foreach($data as $row) {
    echo "<tr>";
      echo "<td>" . $row['manufacturer'] . "</td>";
      echo "<td>" . $row['model'] . "</td>";
      echo "<td>" . $row['color'] . "</td>";
      echo "<td> <select>";

      if ($row['singleSeat'] == 'Yes') {
        echo "<option selected value=Yes>Yes</option>";
      } else {
        echo "<option value=Yes>Yes</option>";
      }

      if ($row['singleSeat'] == 'No') {
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
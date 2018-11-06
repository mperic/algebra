<?php

$filePath = "data.txt";
$handle = fopen($filePath, "r");

function calculateAge($dateOfBirth) {
  
  $current = date("Y-m-d");
  $interval = date_diff(new DateTime($dateOfBirth), new DateTime($current));

  return $interval->format("%y");
}
?>

<table>
  <tr><th>Osobe</th></tr>
  <tr>
    <td>ID</td>
    <td>Ime</td>
    <td>Prezime</td>
    <td>Godina rodenja</td>
    <td>Dob</td>
  </tr>

<?php

while (($line = fgets($handle)) !== false) {
  $dataArray = explode(",", $line);

  echo "<tr>";
  foreach($dataArray as $data) {
    echo "<td>".$data."</td>";
  }
  echo "<td>" . calculateAge(trim($data)) . "</td>";
  echo "</tr>";
}
?>

</table>
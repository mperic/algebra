<?php

$filePath = "data.txt";
$handle = fopen($filePath, "r");
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
  echo "</tr>";
}
?>

</table>
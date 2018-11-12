<?php

require_once("Item.php");

$shoppingItems = [];

$handle = fopen("data.txt", "r");

while (($line=fgets($handle)) !== FALSE) {
  $exploded = explode(",", $line);
 
  $newItem = new Item(
    $exploded[0], $exploded[1], 
    $exploded[2], $exploded[3]
  );

  array_push($shoppingItems, $newItem);
}

fclose($handle);

?>

<html>
<head>
  <meta charset="utf-8" />
  <title>Shopping list</title>
</head>
<body>
  <table>
    <tr>
        <th>Naziv</td>
        <th>Količina</th>
        <th>Cijena / kom</th>
        <th>Uk. cijena</th>
        <th>Akcija</th>
    </tr>

    <?php
      foreach ($shoppingItems as $item) {
        echo "<tr>";
        
        echo "<td>";
        echo $item->getTitle();
        echo "</td>";

        echo "<td>";
        echo $item->getAmount();
        echo "</td>";

        echo "<td>";
        echo $item->getPrice();
        echo "</td>";

        echo "<td>";
        echo $item->getFullPrice();
        echo "</td>";

        echo "<td>";
        echo "<select>";

        if (trim($item->getDiscount()) == "yes") {
          echo "<option selected value=Yes>Yes</option>";
        } else {
          echo "<option value=Yes>Yes</option>";
        }
  
        if (trim($item->getDiscount()) == "no") {
          echo "<option selected value=No>No</option>";
        } else {
          echo "<option value=No>No</option>";
        }
        echo "</select>";
        
        echo "</td>";
        echo "</tr>";
      }
    ?>
  </table>
</body>
</html>
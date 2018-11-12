<?php

require_once ("data.php");
require_once("Item.php");

$shoppingItems = [];

foreach ($shoppingList as $item) {
  array_push($shoppingItems, 
  new Item(
    $item["title"], $item["amount"], 
    $item["price"], $item["discount"]
  ));
}

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
        if ($item->getDiscount() == 'yes') {
          echo "<option selected value=Yes>Yes</option>";
        } else {
          echo "<option value=Yes>Yes</option>";
        }
  
        if ($item->getDiscount() == 'no') {
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
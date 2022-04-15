<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Arrays
    </title>
    
  </head>

  <body>
    <?php
      $fruits = array("grapefruit", "grape", "starfruit", "orange", "durian");
      $items = array("wallet", 3, true);

      echo "I have " . $items[1] . " " . $fruits[2] . "s. <br>";
      echo "I have " . count($fruits) . " fruits. <br>";

    ?>
  </body>
</html>
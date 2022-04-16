<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
  </head>
  <body>
    <?php
      class Marshmallow {
        var $sweetness;
        var $color;
        var $quantity;

        function __construct($orderNum) {
          echo "<h3>Order No. $orderNum</h3>";
        }
      }

      // Create Marshmallow class object
      $order1 = new Marshmallow(1);

      // Assign values to class members
      $order1->sweetness = "50%";
      $order1->color = "pink";
      $order1->quantity = "15";

      // Display order 1
      echo "Total: $order1->quantity <br>
      Color: $order1->color <br>
      Sweetness: $order1->sweetness <br>";

    ?>
  </body>
</html>
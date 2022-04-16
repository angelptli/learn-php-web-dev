<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
  </head>
  <body>
    <?php
      class Marshmallow{
        var $sweetness;
        var $color;
        var $quantity;
      }

      // Create Marshmallow class object
      $order1 = new Marshmallow;

      // Assign values to class members
      $order1->sweetness = "50%";
      $order1->color = "pink";
      $order1->quantity = "15";

      // Display order 1
      echo "<h3>Your order</h3>
      Total: $order1->quantity <br>
      Color: $order1->color <br>
      Sweetness: $order1->sweetness <br>";

    ?>
  </body>
</html>
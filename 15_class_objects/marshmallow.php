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
        var $orderNo;

        function __construct($aSweetness, $aColor, $aQuantity, $aOrderNo) {
          $this->sweetness = $aSweetness;
          $this->color = $aColor;
          $this->quantity = $aQuantity;
          $this->orderNo = $aOrderNo;
        }

        function displayOrder() {
          echo "<h2>Order No. Total: $this->orderNo</h2>
          Quantity: $this->quantity <br>
          Color: $this->color <br>
          Sweetness: $this->sweetness <br>";
        }
      }

      // Create Marshmallow class object
      $order1 = new Marshmallow("50%", "green", 15, 1);
      $order2 = new Marshmallow("75%", "blue", 20, 2);
      $order1->displayOrder();
      $order2->displayOrder();  

    ?>
  </body>
</html>
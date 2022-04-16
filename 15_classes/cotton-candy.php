<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Carnival Cotton Candy
    </title>
  </head>
  <body>
    <?php
      class CottonCandy {
        public $orderSize;
        public $volumeSizeEach;
        public $flavor;
        private $costEach = 2.5;

        function __construct($orderSize, $volumeSizeEach, $flavor) {
          $this->orderSize = $orderSize;
          $this->volumeSizeEach = $volumeSizeEach;
          $this->flavor = $flavor;
        }

        // Set a new cost for each cotton candy
        function setCostEach($newCost) {
          $this->costEach = $newCost;
        }

        // Get the cost for each cotton candy
        function getCostEach() {
          return $this->costEach;
        }

        function getTotalCost() {
          return $this->costEach * $this->orderSize;
        }
        function display() {
          echo "HI<br>";
        }
      }

      $order = new CottonCandy(20, "medium", "green apple");
      $total = $order->getTotalCost();
      echo "Cost of order: $$total <br>";

      // Set new cost per cotton candy to reflect discount
      $order->setCostEach(2.20);
      $total = $order->getTotalCost();
      echo "New Cost of order w/ 0.30 discount: $$total <br>";
    ?>
  </body>
</html>
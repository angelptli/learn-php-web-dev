<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Farmer's Sheep
    </title>
  </head>
  <body>
    <?php
      class Sheep {
        var $flockSize;
        var $avgWeight;
        var $haveFed;

        function __construct($flockSize, $avgWeight, $haveFed) {
          $this->flockSize = $flockSize;
          $this->avgWeight = $avgWeight;
          $this->haveFed = $haveFed;
        }

        function getHealthStatus() {
          if ($this->avgWeight >= 180 && $this->avgWeight <= 250 && $this->haveFed)
            return true;
          return false;
        }
      }

      $status1 = new Sheep(800, 250, true);
      $status2 = new Sheep(798, 245, false);

      echo "<b>Month 1 Status:</b> ";
      if ($status1->getHealthStatus())
        echo "Healthy Flock <br>";
      else
        echo "Unhealthy Flock <br>";

      echo "<b>Month 2 Status:</b> ";
      if ($status2->getHealthStatus())
        echo "Healthy Flock <br>";
      else
        echo "Unhealthy Flock <br>";
    ?>
  </body>
</html>
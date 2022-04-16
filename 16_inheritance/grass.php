<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Grass Fields
    </title>
  </head>
  <body>
    <?php
      class Grass {
        function waterGrass() {
          echo "Task: Water the grass <br>";
        }
        
        function cutGrass() {
          echo "Task: Cut the grass <br>";
        }
        
        function trimGrass() {
          echo "Task: Trim the grass <br>";
        }
      }

      class BobsGrass extends Grass {
        function bobWaterGrass() {
          echo "Bob's Task: Bob water the grass <br>";
        }

        // Replace inherited function definition
        function cutGrass() {
          echo "Bob's Task: Bob cut the grass <br>";
        }

      }

      $task = new Grass();
      $Bobtask = new BobsGrass();
      $Bobtask->waterGrass();
      $Bobtask->bobWaterGrass();
      $Bobtask->cutGrass();
    ?>
  </body>
</html>
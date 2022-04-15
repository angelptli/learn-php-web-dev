<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      While the Loop Loops
    </title>
  </head>
  <body>
    <?php
      $i = 0;
      while ($i < 6) {
        echo "$i <br>";
        $i++;
      }
      echo "<br>";
      $j = 5;
      do {
        echo "$j <br>";
        $j--;
      } while($j >= 0);
    ?>
  </body>
</html>
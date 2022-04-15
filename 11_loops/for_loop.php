<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      For the Loop's Loops
    </title>
  </head>
  <body>
    <?php
      for($i = 0; $i < 10; $i++)
        echo "$i <br>";

      echo "<br>";

      $nums = array(5, 7, 8, 6);
      for($i = 0; $i < count($nums); $i++)
        echo "$nums[$i] <br>";

      echo "<br>";

      foreach ($nums as $num)
        echo $num + 1 . "<br>";
    ?>
  </body>
</html>
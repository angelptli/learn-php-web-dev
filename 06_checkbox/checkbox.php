<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Check The Box
    </title>
  </head>

  <body>
    <!-- Store checked items into fruits array -->
    <form action="checkbox.php" method="post">
      Durian: <input type="checkbox" name="fruits[]" value="durian"><br>
      Grapefruit: <input type="checkbox" name="fruits[]" value="grapefruit"><br>
      Grape: <input type="checkbox" name="fruits[]" value="grape"><br>
      Starfruit: <input type="checkbox" name="fruits[]" value="starfruit"><br>
      Orange: <input type="checkbox" name="fruits[]" value="orange"><br>
      <input type="submit">
    </form>

    You chose:<br>
    <?php
      $fruits = $_POST["fruits"];
      foreach ($fruits as $fruit)
        echo $fruit . "<br>";
    ?>
  </body>
</html>
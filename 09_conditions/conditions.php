<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      If-Else Statements
    </title>
  </head>
  <body>
    <?php
      $isHungry = true;
      $isThirsty = false;

      if ($isHungry)
        echo "You is hungry.<br>";
      elseif ($isThirsty)
        echo "You is thirsty.<br>";
      elseif ($isHungry && $isThirsty)
        echo "You are hungry and thirsty.<br>";
    ?>
  </body>
</html>
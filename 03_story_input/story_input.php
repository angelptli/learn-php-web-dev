<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>That Story</title>
  </head>

  <body>
    <b>Enter a word for each:</b> <br>
    <form action="story_input.php" method="get">
      Number: <input type="text" name="quantity"> <br>
      Verb 1: <input type="text" name="verb1"> <br>
      Verb 2: <input type="text" name="verb2"> <br>
      Place: <input type="text" name="place"> <br>
      Noun: <input type="text" name="noun"> <br>
      <input type="submit">
    </form>

    <?php
      $quantity = $_GET["quantity"] ?? "";
      $verb1 = $_GET["verb1"] ?? "";
      $verb2 = $_GET["verb2"] ?? "";
      $place = $_GET["place"] ?? "";
      $noun = $_GET["noun"] ?? "";

      if ($quantity != "" && $verb1 != "" && $verb2 != "" && $place != "" && $noun != "") {
        echo "For $quantity chickens, you can $verb1 dinner. <br>";
        echo "You must get to your $place to $verb2 the dishes. <br>";
        echo "So far the $noun gets the best portions. <br>"; 
      }

    ?>
  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Hello PHP Server
    </title>
  </head>

  <body>
    <?php 
      echo "<center>
        <h1>Header 1</h1>
        <hr>
        <p>Hello PHP Server!</p>
      </center>";

      $avg = 613;
      $item = "pomegranate";
      echo "<p>
        I like the smell of a fresh $item <br>
        Each $item has on average $avg seeds <br>
        I have $item lotion from Bath & Body Works <br>
        What kind? Midnight $item <br>
      </p>";

      $words1 = "This Should Be Lower Case <br>";
      echo strtolower($words1);
      echo "This lower case sentence has " . strlen($words1) . " letters <br>";
      echo "The first letter of the sentence is " . strtolower($words1[0]) . "<br>";

      // Change first word to different letters
      $words1[0] = "D";
      $words1[1] = "i";
      $words1[2] = "s";
      $words1[3] = "h";
      echo "After changing the first word we get: <br>";
      echo strtolower($words1);

      echo "Now change the second word: <br>" .
      strtolower(str_replace("Should", "Shall", $words1)) . "<br>";
      // substr($var, start, quantity)
      echo "The third word in the sentence is: " . strtolower(substr($words1, 12, 2)) . "<br>";

      echo "<hr><br>Numbers:<br>";

      // Some math review
      $num = 55;
      $num++;
      $num += 20;
      echo $num . "<br>";
      $num = -101;
      echo abs($num) . "<br>";  // 101
      echo max(1, 10) . "<br>"; // 10
      echo sqrt(4) . "<br>"; // 2
      echo pow(2, 3) . "<br>"; // 8
    ?>

    <hr>
    
    <!-- Form to get name and age input -->
    <form action="site.php" method="get">
      Name: <input type="text" name="name">
      Age: <input type="number" name="age">
      <input type="submit">
    </form>

    <!-- Display entered name -->
    <?php if(isset($_GET["name"])): ?>
      Your name is <?php echo $_GET["name"]; ?>
    <?php endif; ?>

    <!-- Display entered age -->
    <?php if(isset($_GET["age"])): ?>
      and your age is <?php echo $_GET["age"]; ?>
    <?php endif; ?>

  </body>
</html>
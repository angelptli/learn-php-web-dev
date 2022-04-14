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
      echo "The third word in the sentence is: " . strtolower(substr($words1, 12, 2))
    ?>
  </body>
</html>
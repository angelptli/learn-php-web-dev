<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Functions
    </title>
  </head>
  <body>
    <?php
      // Create function
      function greetUser() {
        echo "Hello Mortal<br>";
      }

      // Call function
      greetUser();

      // Create function that has parameters
      function greetName($name, $num) {
        echo "Hello " . $name . ". You have " . $num . " cats. <br>";

        return $num;
      }

      $num = greetName("Angel", 0);

      echo "Again, you have " . $num . " cats.<br>";
    ?>
  </body>
</html>
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
      echo
      "<center>
        <h1>Header 1</h1>
        <hr>
        <p>Hello PHP Server!</p>
      </center>";

      $avg = 613;
      $item = "pomegranate";
      echo
      "<p>
        I like the smell of a fresh $item <br>
        Each $item has on average $avg seeds <br>
        I have $item lotion from Bath & Body Works <br>
        What kind? Midnight $item <br>
      </p>";

    ?>
  </body>
</html>
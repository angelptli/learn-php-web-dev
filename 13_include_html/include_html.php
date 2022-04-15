<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Using "include"
    </title>
  </head>
  <body>
    <?php
      include "header1.html";

      echo "This text is below the html header 1 and above the html footer 1.";

      include "footer1.html";
    ?>

    <!-- Another method -->
    <?php include "header2.html" ?>
      This text is below the html header 2 and above the html footer 2.
    <?php include "footer2.html" ?>
  </body>
</html>
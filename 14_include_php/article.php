<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Include PHP
    </title>
  </head>
  <body>
    <?php
      $title = "Peking Duck Enthusiast";
      $author = "Ichiban";
      $wordCount = 500;
      include "article-header.php";
      echo "<br>";
      $user = "angelptli";
      include "greet-user.php";
      greetUser($user);      
      echo "<br>Speed $speed";
    ?>
  </body>
</html>
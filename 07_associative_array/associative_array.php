<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Associative Array
    </title>
  </head>
  <body>
    <form action="associative_array.php" method="post">
      <input type="text" name="student">
      <input type="submit">
    </form>
    <!-- Store key: Bob, value: A+. Note: Keys must be unique. -->
    <?php
      $grades = array("Bob"=>"A+", "Jim"=>"C-", "Fred"=>"C+");

      // // Change value for Bob key
      // $grades["Bob"] = "B";

      // // Display value by key
      // echo $grades["Bob"];

      echo "Student's Grade: ";
      $grade = "";
      if (isset($_POST["student"]) && $grade != "") {
        $grade = $grades[$_POST["student"]] ?? "";
        echo $grade;
      } else {
        echo "Not Found<br>";
      }
    ?>
  </body>
</html>
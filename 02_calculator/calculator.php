<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Basic Calculator
    </title>
  </head>

  <body>
    <form action="calculator.php" method="get">
      <input type="number" name="input_num1">
      <br>
      <input type="number" name="input_num2">
      <input type="submit">
    </form>

    <br>
    
    <?php
      if(isset($_GET["input_num1"]) and isset($_GET["input_num2"])) {
        echo $_GET["input_num1"] . " + " . $_GET["input_num2"] . " = ";
        echo $_GET["input_num1"] + $_GET["input_num2"];
      } else {
        echo "Enter a number into each field <br>";
      }
    ?>
  </body>
</html>
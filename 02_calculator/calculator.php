<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Basic Calculator
    </title>
  </head>

  <body>
    <form action="calculator.php" method="post">
      Enter a number: <input type="number" step="0.1" name="input_num1"><br>
      Enter a sign: <input type="textbox" step="0.1" name="operator"><br>
      Enter a number: <input type="number" name="input_num2"><br>
      <input type="submit">
    </form>

    <br>
    
    <?php
      $input_num1 = $_POST["input_num1"] ?? 0;
      $input_num2 = $_POST["input_num2"] ?? 0;
      $operator = $_POST["operator"] ?? "";
      $result = 0;

      if ($operator == "+")
        $result = $input_num1 + $input_num2;
      elseif ($operator == "-")
        $result = $input_num1 - $input_num2;
      elseif ($operator == "/")
        $result = $input_num1 / $input_num2;
      elseif ($operator == "%")
        $result = $input_num1 % $input_num2;
      elseif ($operator == "*")
        $result = $input_num1 * $input_num2;
      elseif ($operator == "")
        $result = 0;
      else
        echo "Invalid operator.<br>";

      if(isset($_POST["input_num1"]) && isset($_POST["input_num2"]) && isset($_POST["operator"])) {
        echo $_POST["input_num1"] . " " . $_POST["operator"] . " " . $_POST["input_num2"] . " = ";
        echo $result;
      }
    ?>
  </body>
</html>
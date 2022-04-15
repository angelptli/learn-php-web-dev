<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Switch Statements
    </title>
  </head>
  <body>
    <form action="switch_statement.php" method="post">
      There are 4 pieces of cantaloupe.<br><br>
      How many pieces do you want?<br>
      <input type="number" name="userWant">
      <input type="submit">
    </form>

    <?php
      $num_of_cantaloupe = 4;
      $userWant = 0;
      if (isset($_POST["userWant"]))
        $userWant = $_POST["userWant"];
      switch($userWant) {
        case 0:
          break;
        case 1:
          $num_of_cantaloupe -= $userWant;
          break;
        case 2:
            $num_of_cantaloupe -= $userWant;
            break;
        case 3:
          $num_of_cantaloupe -= $userWant;
          break;
        case 4:
          $num_of_cantaloupe -= $userWant;
          break;
        default:
          echo "Enter a number from 0 to " . $num_of_cantaloupe . ".<br>";
      }
      echo "<br>Pieces left: " . $num_of_cantaloupe . "<br>";
      if ($userWant != 0) {
        echo "The cafeteria has now added " . $userWant . " pieces.<br>";
        echo "Now there are 4 pieces again.<br>";
      }
        
    ?>
    
      
  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Login
    </title>
  </head>

  <body>
    <form action="get_password.php" method="post">
      Password: <input type="password" name="password"> <br>
      <input type="submit">
    </form>
    <br><br>

    <?php
      echo $_POST["password"] ?? "";
    ?>
  </body>
</html>
<?php
session_start();

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>

<title> My Website </title>

</head>
<body style="background-image: url('images/brooklyncollege.png'); background-repeat: no-repeat;  background-attachment: fixed;
  background-size: cover;">
  <a href="logout.php"> Logout</a>
  <h1>This is the index page </h1>

  <br>
  Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>

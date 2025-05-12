<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>A1</title>
</head>
<body>

  <h1>Assignment 1</h1>

  <p> Welcome, <?=$_SESSION['username'] ?></p>

  <p><a href="login.php">Click HERE to login</a></p>


</body>
</html>
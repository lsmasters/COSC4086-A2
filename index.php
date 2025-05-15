<?php
  session_start();
    if (!isset($_SESSION['authenticated'])){
      header ("location: login.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>A1</title>
</head>
<body>

  <h1>Assignment 1</h1>

  <p> Welcome, <?=$_SESSION['username'] ?></p>
  <p> Today's date is:  <?php echo date("F j, Y"); ?></p>
</body>
  <footer>
    <p>  <a href='/logout.php'>Click HERE to logout </a></p>
  </footer>
</html>
<?php
  session_start();
  
  if(isset($_SESSION['failed_attempts'])) { 
    echo "This is unsuccessful login attempt # " . $_SESSION['failed_attempts']; 
    echo '<p style="color:red">PLEASE TRY AGAIN!  </p>';
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>

  <h1>Login Form</h1>

  <form action="/validate.php" method="post">
    <label for="username">Username:</label>
    <br>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password:</label>
    <br>
    <input type="password" id="password" name="password">
    <br>
    <br>
    <input type="submit" value="SUBMIT">
  </form>
    <p>  <a href='/create_user.php'>Click here to CREATE a new account </a></p>
  

</body>
</html>



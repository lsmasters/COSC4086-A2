<?php
  session_start();
  if(isset($_SESSION['pwmismatch']) && $_SESSION['pwmismatch'] == 1){
      echo '<p style="color:red">PASSWORD MISMATCH! <br> PLEASE TRY AGAIN!  </p>';
  }
  if (isset($_SESSION['usernameUsed']) &&
    $_SESSION['usernameUsed']){
    echo '<p style="color:red">USERNAME ALREADY EXISTS! <br>  PLEASE TRY AGAIN!  </p>';
  }
    if(isset($_SESSION['passwordInvalid']) &&
       $_SESSION['passwordInvalid']){
      echo '<p style="color:red">PASSWORD DOES NOT MEET REQUIREMENTS!  <br> PLEASE TRY AGAIN!  </p>';
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title>CreateAccount</title>
</head>
<body>

  <h1>Account Create Form</h1>

  <form action="/newusercheck.php" method="post">
    <label for="username">Username:</label>
    <br>
    <input type="text" id="username" name="username" placeholder = "Enter Username" autofocus>
    <br>
    <label for="password">Password:</label>
    <br>
    <input type="password" id="password" name="password">
    <br>
    <label for="password">PasswordAgain:</label>
    <br>
    <input type="password" id="password2" name="password2">
    <br>
    <br>
    <input type="submit" value="SUBMIT">
  </form>
    <h2>  Username Requiremnts</h2>
      <p>    Usernames must be UNIQUE.</p>    
    <h2>  Password Requiremnts</h2>
    <p>    1. Minimum lenght:  8 characters</p>
    <p>    2. Contains uppercase letter(s)</p>
    <p>    3. Contains lowercase letter(s)</p>
    <p>    4. Contains number(s)</p>
    <p>    5. Contains special character(s)(!@#$%)</p>  


</body>
</html>



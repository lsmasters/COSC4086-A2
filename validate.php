<?php
  session_start();

  $valid_uname = "one";
  $valid_pword = "one";

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;  
  $password = $_REQUEST['password'];

  if ($username == $valid_uname && $password == $valid_pword){
    $_SESSION['authenticated'] = 1;
    header ("location: index.php");
  } else{
    if(!isset($_SESSION['failed_attempts'])){
      $_SESSION['failed_attempts'] = 1;  
    } else{
      $_SESSION['failed_attempts'] += 1;
    }
    header ("location: login.php");  
    echo "This is unsuccessful login attempt # " . $_SESSION['failed_attempts']; 
    echo ".  Please try again.  ";
   
  }
  
?>
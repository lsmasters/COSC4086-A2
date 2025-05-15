<?php
session_start();

//1.  get new username and password from form
$username = $_REQUEST['username'];
//$_SESSION['username'] = $username;  
$password = $_REQUEST['password'];

//2.   check db for username...if included return to create_user with username flag set

// 3. check password validity...if error return to create_user with password flag set

//  4. add new item to db with userame and hashed password...return to login page

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

<?php
  session_start();

  
  require_once 'user.php';   //open db file

  $user = new User();
  $user_list = $user->get_all_users();  //get all db records

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;  
  $password = $_REQUEST['password'];
  
  $hpassword = password_hash($password, PASSWORD_DEFAULT); //hash password
 
  foreach($user_list as $item){  //check the list for a match
    echo $item['password'];
    echo "<br>";
    echo $hpassword;
    echo "<br>";
    if (($username == $item['username']) && ($hpassword == $item['password'])){
        $_SESSION['authenticated'] = 1;
        header ("location: index.php");  //match
    }
  } 
  //no matc
  if(!isset($_SESSION['failed_attempts'])){  
      $_SESSION['failed_attempts'] = 1;  
  } else{
      $_SESSION['failed_attempts'] += 1;
  }  
    
  header ("location: login.php");  
 
?>
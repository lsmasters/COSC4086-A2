<?php
  session_start();

  require_once 'user.php';   //open db file

  $user = new User();
  $user_list = $user->get_all_users();  //get all db records

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;  
  $password = $_REQUEST['password'];
  
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT); //hash password
 
  foreach($user_list as $item){  //check the list for a match
    /*echo $item['password'];
    echo "<br>";
    //echo $hpassword;
    echo $hashedPassword;
    echo "<br>"; */
    if (($username == $item['username']) && (password_verify($password,$item['password']))){
        header ("location: index.php");//match: GO TO INDEX PAGE
        echo 'PASSWORD MATCH';
        $_SESSION['authenticated'] = 1;
        exit;
    }
  } 
  //no match
  if(!isset($_SESSION['failed_attempts'])){  
      $_SESSION['failed_attempts'] = 1;  
  } else{
      $_SESSION['failed_attempts'] += 1;
  }  
    
  header ("location: login.php");  
 
?>
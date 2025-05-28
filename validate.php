<?php
    session_start();

    require_once 'user.php';   //open db file

    $user = new User();
    $user_list = $user->get_all_users();  //get all db records

    $username = $_REQUEST['username'];
    $_SESSION['username'] = $username;  
    $password = trim($_REQUEST['password']);
    
  
    foreach ($user_list as $item) { //check to see if username already used
 
        if (($username == $item['username']) && (password_verify($password,$item['password']))){
            $_SESSION['authenticated'] = 1;
            header ("location: index.php");//match: GO TO INDEX PAGE
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
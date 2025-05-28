<?php
    session_start();

    require_once 'user.php';   //open db file

    $user = new User();
    $user_list = $user->get_all_users();  //get all db records

    $username = $_REQUEST['username'];
    $_SESSION['username'] = $username;  
    $password = trim($_REQUEST['password']);
    $password2 = trim($_REQUEST['password2']);

    if ($password != $password2) {  //check for password entry match
        $_SESSION['pwmismatch'] = 1;
        header ("location: create_user.php");
        exit;
    } else {
        $_SESSION['pwmismatch'] = 0;
    }
  
    foreach ($user_list as $item){
 
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
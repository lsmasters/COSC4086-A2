<?php
session_start();
require_once 'user.php';   //open db file

$user = new User();
$user_list = $user->get_all_users();  //get all db records

//1.  get new username and password from form
$username = $_REQUEST['username'];
//$_SESSION['username'] = $username;  
$password = $_REQUEST['password'];

//2.   check db for username...if included return to create_user with username flag set
foreach ($user_list as $item){
  if ($username == $item['username']){
    header ("location: create_user.php");
    $_SESSION['usernameUsed'] = 1;
    exit;
  }
}
$_SESSION['usernameUsed'] = 0;

// 3. check password validity...if error return to create_user with password flag set
if (strlen($password) >= 8 &&
    preg_match('/[A-Z]/', $password) &&
    preg_match('/[a-z]/', $password) && 
    preg_match('/[0-9]/', $password) &&
    preg_match('/[!@#$%]/',$password)){
        $user->create_user($username,$password);  //add to db
        header ("location: login.php");
        $_SESSION['passwordInvalid'] = 0;
        exit; 
} else{   
    header ("location: create_user.php");
    $_SESSION['passwordInvalid'] = 1;
    exit;
}


?>

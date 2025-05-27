<?php
$require_once 'user.php';

user = new User();
$user_list = $user->get_all_users();

//echo "<pre>";
//print_r($user_list);  
foreach ($user_list as $item){
  echo $item['username'];
  echo "<br>";
}
foreach ($user_list as $item){
  echo $item['password'];
  echo "<br>";
}
?>

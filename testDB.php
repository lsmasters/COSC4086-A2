<?php
  require_once 'user.php';

  $user = new User();
  $user_list = $user->get_all_users();
 
  foreach ($user_list as $item){
    echo $item['username'];
    echo "<br>";
    echo $item['password'];
    echo "<br>";
  }

?>

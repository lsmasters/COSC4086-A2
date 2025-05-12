<?php

  $valid_uname = "one";
  $valid_pword = "one";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($username == $valid_uname && $password == $valid_pword){
    echo "Successful Login!";
    } else{
    echo "Invalid Login!";
  }
  
?>
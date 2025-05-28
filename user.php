<?php
require_once 'database.php';

Class User {
  public function get_all_users() {
    $db = db_connect();
    $sql =
    $stmt = $db->prepare( "SELECT * FROM users;");
    $stmt->execute();
    $rows = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $rows;
  }

  public function create_user($username,$password){
    $db = db_connect();
    $phashed = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
    $stmt = $db -> prepare($sql);
    $stmt -> bindParam(':username', $username);
    $stmt -> bindParam(':password', $phashed);
  
    return $stmt -> execute();
  }

  public function delete_user($username){
    $db = db_connect();
    $sql = "DELETE FROM users WHERE username = :username";
    $stmt = $db -> prepare($sql);
    $stmt -> bindParam(':username', $username); 
    return $stmt -> execute();
  }

}

?>
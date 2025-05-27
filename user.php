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
    $sql = "INSERT INTO users (username, password) VALUES ($username, password_hash($password, PASSWORD_DEFAULT))";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  }

}

?>
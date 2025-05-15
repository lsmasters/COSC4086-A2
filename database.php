<?php

require_once 'config.php';

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE, DB_PORT);

function db_connect() {
  try {
    $dbh = new PDO('mysql:host='.DB_HOST.';   port='.DB_PORT .';dbname='.DB_DATABASE, DB_USER, DB_PASS);
    return $dbh;
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
  }
}
?>
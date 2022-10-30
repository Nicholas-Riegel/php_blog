<?php

class User {

  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  /**
   * Insert a new user into the database.
   *
   * @return void
   */
  public function insertNewUser(){
    $pdo = $this->db->pdo;
    $query = 'INSERT INTO users (username, password) VALUES (:usernamex, :passwordx);';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
      'usernamex' => htmlspecialchars($_POST['username']),
      'passwordx' => htmlspecialchars($_POST['password'])
    ]);
  }

  /**
   * Find the user for login purposes.
   *
   * @return object The user
   */
  public function findUser(){
    $pdo = $this->db->pdo;
    $query = 'SELECT * FROM users WHERE username = :usernamex';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
      'usernamex' => htmlspecialchars($_POST['username'])
    ]);
    return $stmt->fetch();
  }
}
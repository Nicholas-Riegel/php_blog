<?php

class Database{

  public $pdo;
  
  public function __construct()
  {
    $host = 'localhost';
    $dbname = 'sessionsOOP';
    $user = 'root';
    $pword = 'Knowthyself';
    $dsn = 'mysql:host='.$host.';dbname='.$dbname ;

    try {
      $this->pdo = new PDO($dsn, $user, $pword);
    } catch (PDOException $e) {
      die('The error is: ' . $e->getMessage());
    }
  }
}
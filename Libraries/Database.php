<?php

class Database{

  public $pdo;
  
  public function __construct()
  {
    // Heroku db credentials
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $host     = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $dbname   = substr($url["path"], 1);
    
    // Development db credentials
    // $host     = 'localhost';
    // $username = 'root';
    // $password = '';
    // $dbname   = 'sessionsOOP';

    // DSN
    $dsn      = 'mysql:host='.$host.';dbname='.$dbname ;

    try {
      $this->pdo = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      die('The error is: ' . $e->getMessage());
    }
  }
}
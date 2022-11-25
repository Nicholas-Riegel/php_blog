<?php

class Database{

  public $pdo;
  
  public function __construct()
  {
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    $host = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

    $dsn    = 'mysql:host='.$host.';dbname='.$db ;

    try {
      $this->pdo = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      die('The error is: ' . $e->getMessage());
    }
  }
}
<?php

class Database{

  public $pdo;
  
  public function __construct()
  {
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    // var_dump($url);
    
    $host     = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $dbname   = substr($url["path"], 1);
    $dsn      = 'mysql:host='.$host.';dbname='.$dbname ;

    try {
      $this->pdo = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
      die('The error is: ' . $e->getMessage());
    }
  }
}
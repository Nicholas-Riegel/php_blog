<?php

class Database{

  public $pdo;
  
  public function __construct()
  {
    // $host   = 'containers-us-west-69.railway.app';
    $host   = 'localhost';
    // $dbname = 'railway';
    $dbname = 'sessionsOOP';
    $user   = 'root';
    // $pword  = 'xbGPoYyhG4EtgOzPSVDL';
    $pword  = '';
    // $port   = 7912;
    $port   = 3306;
    $dsn    = 'mysql:host='.$host.';port='.$port.';dbname='.$dbname ;

    try {
      $this->pdo = new PDO($dsn, $user, $pword);
    } catch (PDOException $e) {
      die('The error is: ' . $e->getMessage());
    }
  }
}
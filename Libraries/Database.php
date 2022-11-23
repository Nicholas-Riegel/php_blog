<?php

class Database{

  public $pdo;
  
  public function __construct()
  {
    $host   = 'containers-us-west-69.railway.app';
    $dbname = 'railway';
    $user   = 'root';
    $pword  = 'xbGPoYyhG4EtgOzPSVDL';
    $port   = 7912;
    $dsn    = 'mysql:host='.$host.';port='.$port.';dbname='.$dbname ;

    try {
      $this->pdo = new PDO($dsn, $user, $pword);
    } catch (PDOException $e) {
      die('The error is: ' . $e->getMessage());
    }
  }
}
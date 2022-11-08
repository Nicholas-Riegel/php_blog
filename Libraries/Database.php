<?php

class Database{

  public $pdo;
  
  public function __construct()
  {
    $host = 'containers-us-west-69.railway.app';
    $dbname = 'railway';
    $user = 'root';
    $pword = 'xbGPoYyhG4EtgOzPSVDL';
    $dsn = 'mysql:host='.$host. ';port=7912;dbname='.$dbname ;
    // $dsn = 'mysql://root:xbGPoYyhG4EtgOzPSVDL@containers-us-west-69.railway.app:7912/railway';

    try {
      $this->pdo = new PDO($dsn, $user, $pword);
    } catch (PDOException $e) {
      die('The error is: ' . $e->getMessage());
    }
  }
}
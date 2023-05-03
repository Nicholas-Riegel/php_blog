<?php

class Controllers
{

  public static function requireWithData($filePath, $data = []){
    //check for view file
    if (file_exists($filePath)) {
      require_once $filePath;
    } else {
      die('File does not exist.');
    }
  }
}
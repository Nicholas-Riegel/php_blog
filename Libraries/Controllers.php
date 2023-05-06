<?php

class Controllers
{
  public function requireWithData($filePath, $data = []){
    if (file_exists($filePath)) {
      require_once $filePath;
    } else {
      die('File does not exist.');
    }
  }
}
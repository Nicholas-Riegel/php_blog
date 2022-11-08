<?php

class Core
{

  private $controller = 'Pages';
  private $controller_function = 'index';

  public function __construct()
  {
    // Prepare URL
    $cleaned_uri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
    $uri_string = trim($cleaned_uri, '/');
    $uri_array = array_slice(explode('/', $uri_string), 0, 2);
    
    // Check first subdirectory
    if (!empty($uri_array[1]) && file_exists('./Controllers/' . ucwords($uri_array[1]) . '.php')) {
      
      $this->controller = ucwords($uri_array[1]);

      // Check second subdirectory
      if (!empty($uri_array[2]) && method_exists($this->controller, strtolower($uri_array[2]))) {
      
        $this->controller_function = strtolower($uri_array[2]);
        
      }
    }

    // Instantiate controller class
    $active_controller = new $this->controller();

    // Activate method and view
    $active_controller->{$this->controller_function}();
  }
}

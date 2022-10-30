<?php

class Users extends Controllers
{
  
  /**
   * Register user.
   *
   * @return void
   */
  public function register(){
    if (
      isset($_POST['submit_registration'])
      && !empty($_POST['username']) 
      && !empty($_POST['password'])
    ) {
      $newUser = new User();
      $newUser->insertNewUser();
      header('location: http://localhost:8080/users/login');
    } else {
      unset($_POST);
      header('location: http://localhost:8080/pages/register');
    }
  }

  /**
   * Login user.
   *
   * @return void
   */
  public function login(){
    if (
      isset($_POST['submit_login'])
      && !empty($_POST['username'])
      && !empty($_POST['password'])
    ) {
      $user = new User();
      $row = $user->findUser();
      if ($row && $row['password'] == htmlspecialchars($_POST['password'])) {
        $_SESSION['username'] = htmlspecialchars($_POST['username']);
        $_SESSION['id'] = htmlspecialchars($row['id']);
        unset($_POST);
        header('location: http://localhost:8080');
      } else {
        unset($_POST);
        header('location: http://localhost:8080/pages/login');
      }
    }
  }
}
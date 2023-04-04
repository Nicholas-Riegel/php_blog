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
      $row = $newUser->findUser();
      if (!$row) {
        $newUser->insertNewUser();
        header('location:' . URL_ROOT . '/pages/login');
      } else {
        // more should be done here to indicate that username is already taken
        unset($_POST);
        header('location:' . URL_ROOT . '/pages/register');
      }
    } else {
      unset($_POST);
      header('location:' . URL_ROOT . '/pages/register');
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
        header('location:' . URL_ROOT);
      } else {
        unset($_POST);
        header('location:' . URL_ROOT . '/pages/login');
      }
    }
  }
}
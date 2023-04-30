<?php

class Pages extends Controllers
{
  /**
   * Send user to home page with the list of posts.
   * Signed in users will be able to edit or delete their own posts.
   * 
   * @return void
   */
  public function index(){    
    // $_SESSION['username'] = 'Guest';
    $posts = new Post();
    $posts_array = $posts->getAllPosts();
    $this->requireWithData('./views/home.php', $posts_array);
  }

  /**
   * Send user to Register Page.
   *
   * @return void
   */
  public function register(){
      $this->requireWithData('./views/register.php');
  }
  
  /**
   * Send user to Login page.
   *
   * @return void
   */
   public function login(){
      $this->requireWithData('./views/login.php');
  }
  
  /**
   * Send user to the create page.
   *
   * @return void
   */
  public function create(){
    if (!empty($_SESSION['username'])){
      require './views/create.php';
    } else {
      header('location:' . URL_ROOT);
    }
  }

  /**
   * Send user to edit page with post already filled in.
   * 
   * @return void
   */
  public function edit(){
      $post = new Post();
      $post = $post->getPost($_GET['post_id']);
    if ($post){
      $this->requireWithData('./views/edit.php', ['post' => $post]);
    } else {
      header('location:'. URL_ROOT);
    }
  }

  /**
   * Logout
   *
   * @return void
   */
  public function logout(){
    session_destroy();
    header('location:' . URL_ROOT);
  }
}
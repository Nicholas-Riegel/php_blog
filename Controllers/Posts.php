<?php

class Posts extends Controllers
{
  /**
   * Submit a created post from the create page.
   *
   * @return void
   */
  public function submit(){
    if (isset($_POST['submit_post'])){
      $post = new Post();
      $post->insertPost();
      header('location:' . URL_ROOT);
    }
  }
  
  /**
   * Update a post from the edit page.
   *
   * @return void
   */
  public function update(){
    if (isset($_POST['update_post'])){
      $post = new Post();
      $post->updatePost();
      header('location:' . URL_ROOT);
    }
  }

  /**
   * Delete post.
   *
   * @return void
   */
  public function delete(){
    if (ctype_digit($_GET['post_id'])){
      $post = new Post();
      $post->deletePost();
    }
    header('location:' . URL_ROOT);
  }
}
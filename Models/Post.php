<?php

class Post
{
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  /**
   * Insert a created post into the database.
   *
   * @return void
   */
  public function insertPost(){
    if (strlen($_POST['body']) > 700){
      $_POST['body'] = substr($_POST['body'], 0, 700) . '...';
    }
    $pdo = $this->db->pdo;
    $query = 'INSERT INTO posts (user_id, body) VALUES (:user_idx, :bodyx);';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
      'user_idx' => htmlspecialchars($_SESSION['id']),
      'bodyx' => htmlspecialchars($_POST['body'])
    ]);
  }
  
  /**
   * Get all the posts from the database.
   *
   * @return array The array of posts.
   */
  public function getAllPosts(){
    $pdo = $this->db->pdo;
    $query = 'SELECT 
        posts.id AS post_id,
        users.username AS username,
        posts.body AS body
      FROM posts
      JOIN users ON posts.user_id = users.id;';
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
  }
  
  /**
   * Deleted a post from the database.
   *
   * @return void
   */
  public function deletePost(){
    $pdo = $this->db->pdo;
    $query = 'DELETE FROM posts WHERE id = :idx;';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
      'idx' => htmlspecialchars($_GET['post_id'])
    ]);
  }
  
  /**
   * Get a single post.
   *
   * @param int $id
   * @return object The post.
   */
  public function getPost($id){
    $pdo = $this->db->pdo;
    $query = 'SELECT * FROM posts WHERE id = :idx;';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
      'idx' => htmlspecialchars($id)
    ]);
    return $stmt->fetch();
  }
  
  /**
   * Update a post
   *
   * @return void
   */
  public function updatePost(){
    if (strlen($_POST['body']) > 700){
      $_POST['body'] = substr($_POST['body'], 0, 700) . '...';
    }
    $pdo = $this->db->pdo;
    $query = 'UPDATE posts SET body = :bodyx WHERE id = :idx;';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
      'idx' => htmlspecialchars($_POST['update_post']),
      'bodyx' => htmlspecialchars($_POST['body'])
    ]);
  }
}
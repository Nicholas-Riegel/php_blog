<?php

  $session_username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

  require './views/includes/header.php';

?>

<h1 style='margin: auto; text-align: center;'>Home page</h1>

<?php foreach ($data as $post) : ?>
  
  <h4><?= $post['username'] ?></h4>
  <p><?= $post['body'] ?></p>

  <?php if ($post['username'] == $session_username) : ?>
    <a href='/pages/edit/?post_id=<?= $post['post_id'] ?>'>Edit</a>
    <a onClick="return confirm('Are you sure you want to delete this?')" href='/posts/delete/?post_id=<?= $post['post_id'] ?>' >Delete</a>
  <?php endif ?>
    
<?php endforeach ?>

<?php require './views/includes/footer.php'; ?>
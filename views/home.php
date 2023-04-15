<?php

  $session_username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

  require './views/includes/header.php';

?>

<!-- <h1 style='margin: auto; text-align: center;'>Home page</h1>
<p style='margin: auto; text-align: center;'>Project only has minimal styling at the moment, but it is fully functional.</p>
<p style='margin: auto; text-align: center;'>See <a href="https://github.com/Nicholas-Riegel/php_blog">README file on the GitHub repository</a>.</p>
<p style='margin: auto; text-align: center;'>Feel free to register, login and create a post!</p> -->

<?php foreach ($data as $post) : ?>
  
  <h4><?= $post['username'] ?></h4>
  <p><?= $post['body'] ?></p>

  <?php if ($post['username'] == $session_username) : ?>
    <a href='/pages/edit/?post_id=<?= $post['post_id'] ?>'>Edit</a>
    <a onClick="return confirm('Are you sure you want to delete this?')" href='/posts/delete/?post_id=<?= $post['post_id'] ?>' >Delete</a>
  <?php endif ?>
    
<?php endforeach ?>

<?php require './views/includes/footer.php'; ?>
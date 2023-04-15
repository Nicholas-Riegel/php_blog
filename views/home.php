<?php

  $session_username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

  require './views/includes/header.php';

?>


<?php foreach ($data as $post) : ?>
  <div class="container card p-3 mb-3">

    <p class="mb-0">Author:</p>
    <h4 class="border rounded ps-1 pe-1"><?= $post['username'] ?></h4>
    <p class="mb-0">Post:</p>
    <p class="border rounded ps-1 pe-1"><?= $post['body'] ?></p>
    
    <?php if ($post['username'] == $session_username) : ?>
      <a href='/pages/edit/?post_id=<?= $post['post_id'] ?>'>Edit</a>
      <a onClick="return confirm('Are you sure you want to delete this?')" href='/posts/delete/?post_id=<?= $post['post_id'] ?>' >Delete</a>
    <?php endif ?>
      
  </div>
<?php endforeach ?>

<?php require './views/includes/footer.php'; ?>
<?php
require './views/includes/header.php';
?>

<h1 style='margin: auto; text-align: center;'>Edit Post</h1>

<form action="/posts/update" method="post">

  <label for="body">Post:</label>
  <br>
  <textarea name="body" id="body" cols="30" rows="10"><?= $data['post']['body'] ?></textarea>
  <br>
  <button name='update_post' value=<?= $data['post']['id'] ?>>Submit</button>

</form>
<a href="/"><button>Cancel</button></a>
<?php require './views/includes/footer.php'; ?>
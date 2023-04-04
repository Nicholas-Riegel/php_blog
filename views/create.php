<?php
require './views/includes/header.php';
?>

<h1 style='margin: auto; text-align: center;'>Create Post</h1>

<form action="/posts/submit" method="post">

  <label for="body">Post:</label>
  <br>
  <textarea name="body" id="body" cols="30" rows="10"></textarea>
  <br>
  <button name='submit_post' value=1>Submit</button>

</form>
<a href="/"><button>Cancel</button></a>

<?php require './views/includes/footer.php'; ?>
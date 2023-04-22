<?php require './views/includes/header.php';?>

<h1 style='text-align: center; text-decoration: none;' class="display-6 text-info">Edit Post</h1>


<div class="container card p-3 mb-3 mt-4">

  <form action="/posts/update" method="post">

    <label for="body">Post:</label>
    <br>
    <textarea name="body" id="body" rows="7" class="w-100 border rounded p-2"><?= $data['post']['body'] ?></textarea>
    <br>
    <div class="d-flex justify-content-end">
      <button name='update_post' value=<?= $data['post']['id'] ?> class="btn btn-md btn-outline-info">Submit</button>
      <a href="/" class="btn btn-md btn-outline-info ms-2">Cancel</a>
    </div>
  </form>

</div>
<?php require './views/includes/footer.php'; ?>
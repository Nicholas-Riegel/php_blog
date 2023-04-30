<?php require './views/includes/header.php'; ?>

<h1 style='text-align: center; text-decoration: none;' class="display-6 text-color">Register</h1>

<div style="width: 30rem;" class="container card p-3 mb-3 mt-4">
  
  <form action="/users/register" method="POST">
    
    <label for="username">Username:</label>
    <br>
    
    <?php if (isset($data['message'])) : ?>
      <p class="text-color mb-0"><?= $data['message']?></p>
    <?php endif ?>

    <input type="text" name="username" id='username' required minlength="1" maxlength="30" placeholder="Only letters and numbers. 30 characters max." pattern="[a-zA-Z0-9]+" class="border rounded ps-1 pe-1 w-100">
    <br>

    <label for="password">Password:</label>
    <br>
    <input type="text" name="password" id='password' required minlength="1" maxlength="30" placeholder="Only letters and numbers. 30 characters max." pattern="[a-zA-Z0-9]+" class="border rounded ps-1 pe-1 w-100">
    <br>
    
    <div class="d-flex mt-2">
      <button name='submit_registration' value=1 class='btn btn-md ms-auto btn-outline-info'>Submit</button>
    </div>

  </form>
</div>

<?php require './views/includes/footer.php'; ?>
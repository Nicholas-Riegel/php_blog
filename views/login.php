<?php require './views/includes/header.php';?>

<h1 style='margin: auto; text-align: center;'>Login Page</h1>

<div class="container card p-3 mb-3">

  <form action="/users/login" method="POST">

    <label for="username">Username:</label>
    <br>
    <input type="text" name="username" id='username' class="border rounded ps-1 pe-1 w-100">
    <br>
    <label for="password">Password:</label>
    <br>
    <input type="text" name="password" id='password' class="border rounded ps-1 pe-1 w-100">
    <br>
    <div class="d-flex">
      <button name='submit_login' value=1 class='btn btn-md btn-outline-info ms-auto'>Submit</button>
    </div>
    
  </form>

</div>

<?php require './views/includes/footer.php'; ?>
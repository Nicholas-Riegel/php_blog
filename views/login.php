<?php require './views/includes/header.php';?>

<h1 style='margin: auto; text-align: center;'>Login Page</h1>

<form action="/users/login" method="POST">

  <label for="username">Username:</label>
  <br>
  <input type="text" name="username" id='username'>
  <br>
  <label for="password">Password:</label>
  <br>
  <input type="text" name="password" id='password'>
  <br>
  <button name='submit_login' value=1>Submit</button>

</form>

<?php require './views/includes/footer.php'; ?>
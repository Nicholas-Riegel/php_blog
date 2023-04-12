<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>body{background-color: gray;}</style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>PHP Blog</title>
</head>

<body>

  <h2 style='margin: auto; text-align: center;'>PHP BLOG LEARNING / TEACHING TOOL</h2>
  
  <?php if (!empty($_SESSION['username'])) : ?>

    <a href="/pages/logout" style="float: right; margin-left: 10px;">Log out</a>

  <?php else : ?>

    <a href="/pages/register" style='margin-left: 10px;float: right'>Register</a>
    <a href="/pages/login" style='margin-left: 10px; float: right'>Log In</a>

  <?php endif ?>


  <h4 style='float: right; margin: 0;'><?= !empty($_SESSION['username']) ? $_SESSION['username'] : 'Guest' ?></h4>

  <a href="/pages/index">Home</a>

  <?php if (!empty($_SESSION['username'])) : ?>

    <a href="/pages/create">Create Post</a>

  <?php endif ?>

  <hr>
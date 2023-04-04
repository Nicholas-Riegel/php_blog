<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>body{background-color: gray;}</style>
  <title>PHP Blog</title>
</head>

<body>

  <h2 style='margin: auto; text-align: center;'>PHP BLOG LEARNING / TEACHING TOOL</h2>
  <p style='margin: auto; text-align: center;'>Project deliberately left unstyled.</p>
  <p style='margin: auto; text-align: center;'>See <a href="https://github.com/Nicholas-Riegel/php_blog">README file on the GitHub repository</a>.</p>
  <p style='margin: auto; text-align: center;'>Feel free to register, login and create a post!</p>
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
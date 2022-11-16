<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* * {
      border: black 1px solid;
    } */
    body {
      background-color: gray;
    }
  </style>
  <title>PHP Blog</title>
</head>

<body>

  <h2 style='margin: auto; text-align: center;'>SESSIONS OOP</h2>

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
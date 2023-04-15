<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
  <link rel="stylesheet" href="./views/css/styles.css">
  
  <title>PHP Blog</title>

</head>

<body>

  <nav class="navbar fixed-top bg-secondary">

    <?php if (!empty($_SESSION['username'])) : ?>
      
      <!-- <a href="/pages/logout" style="float: right; margin-left: 10px;">Log out</a> -->
      <a href="/pages/logout" class="text-decoration-none">
        <h1 class="display-6 text-info">Log out</h1>
      </a>
      
      <?php else : ?>
        
        <!-- <a href="/pages/register" style='margin-left: 10px;float: right'>Register</a> -->
        <a href="/pages/register" class="text-decoration-none">
          <h1 class="display-6 text-info">Register</h1>
        </a>

        <!-- <a href="/pages/login" style='margin-left: 10px; float: right'>Log In</a> -->
        <a href="/pages/login" class="text-decoration-none">
          <h1 class="display-6 text-info">
            Log In
          </h1>  
        </a>
        
        <?php endif ?>
        
        <!-- <h4 style='float: right; margin: 0;'><?= !empty($_SESSION['username']) ? $_SESSION['username'] : 'Guest' ?></h4> -->
        <h4 class="display-6 text-info"><?= !empty($_SESSION['username']) ? $_SESSION['username'] : 'Guest' ?></h4>
        
        <a href="/pages/index" class="text-decoration-none">
          <h1 class="display-6 text-info">
            Home
          </h1>
        </a>
        
        <?php if (!empty($_SESSION['username'])) : ?>
          
          <a href="/pages/create">
            <h1 class="display-6 text-info">
              Create Post
            </h1>
          </a>
          
        <?php endif ?>
        
        <hr>
    </nav>  
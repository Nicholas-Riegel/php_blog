<!DOCTYPE html>
<html lang="en">
  
<head>
    
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href=<?= URL_ROOT . "/views/css/styles.css" ?>>
  
  <title>PHP Blog</title>
  
</head>

<body>
  
  <nav class="navbar fixed-top bg-secondary">
    
    <div class="container d-flex">

      <!-- Home link  -->
      <a href="/pages/index" class="text-decoration-none">
        <h1 class="display-6 text-info">Home</h1>
      </a>
      
      <!-- Create Post link  -->
      <?php if (!empty($_SESSION['username'])) : ?>
      
        <a href="/pages/create" class="text-decoration-none">
          <h1 class="display-6 text-info ms-4">Create Post</h1>
        </a>
      
      <?php endif ?>
      
      <!-- User Name  -->
      <h4 class="display-6 text-info ms-auto"><?= !empty($_SESSION['username']) ? $_SESSION['username'] : 'Guest' ?></h4>
      
      <?php if (!empty($_SESSION['username'])) : ?>
        
        <!-- Logout link  -->
        <a href="/pages/logout" class="text-decoration-none ms-4">
          <h1 class="display-6 text-info">Logout</h1>
        </a>
        
      <?php else : ?>
        
        <!-- Log in link  -->

        <a href="/pages/login" class="text-decoration-none ms-4">
          <h1 class="display-6 text-info">Login</h1>  
        </a>
        
        <!-- Register link  -->
        <a href="/pages/register" class="text-decoration-none ms-4">
          <h1 class="display-6 text-info">Register</h1>
        </a>

      <?php endif ?>
      
    </div>
  
  </nav>  

  <main style="position: relative; top: 6rem;">
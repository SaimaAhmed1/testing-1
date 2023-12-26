<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

 <!-- Navbar start here-->
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Post System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Add post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">All post</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
 <!-- Navbar ends here -->
 <!-- from start here  -->
 <div class="card col-md-4 mx-auto mt-5">
    <div class="card-header">Add post </div>
    <div class=" card-body">
        <form action="./controller/storepost.php" method="POST">
            <input name="title" type="text" placeholder="post title" class="form-control my-5">
            
              <?php
            if(isset($_SESSION['errors']['title_error'])){?>
              <span class="text-danger">
           <?=
           $_SESSION['errors']['title_error'];
            ?>
           </span><?php
              
            }
            ?>
            
            <textarea name="details"  placeholder="post details" class="form-control my-2 "></textarea>
            <?php
            if(isset($_SESSION['errors']['detail_error'])){?>
              <span class="text-danger">
           <?= $_SESSION['errors']['detail_error'];
            ?>
           </span><?php
              
            }
            ?>

            <input name="author" type="text" placeholder="post author" class="form-control my-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
 </div>
<!-- from ends here -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="dark-background">
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4 text">Mythologie Grecque</h5>
    <span class="text-muted">
    <a href="../index.php" class="link-light link">Home</a>
      <?php if(!isset($_SESSION['userid'])){
        echo '<a href="login.php" class="link-light link mx-2">Log In</a>';
        echo  '<a href="signup.php" class="link-light link mx-2">Sign Up</a>';
      }else{
        echo '<a href="../includes/logout.inc.php" class="link-light link mx-2">Log Out</a>';
        if(isset($_SESSION['status']) == "admin"){
          echo  '<a href="create.php" class="link-light link mx-2">Add Article</a>';
        }        
      } ?>
    </span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler css-selector" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<section class="p-5 mx-auto" style="border-radius: 15px;">
        <div class="container-lg css-selector shadow py-5 mx-auto w-50">
        <h1 class="display-6 text-center text-light">NEW ARTICLE</h1>
            <form action="../includes/create.inc.php" method="post"  enctype="multipart/form-data">
                <div class="row m-4">
                    <label class="text-light">Title :</label>
                    <input class="form-control" type="text" name="title" id="title" placeholder="TITLE.....">
                </div>
                <div class="row m-4">
                    <label class="text-light">Content :</label>
                    <textarea class="form-control" name="content" id="content" cols="30" rows="5" placeholder="CONTENT...."></textarea>
                </div>
                <div class="row m-4">
                    <input type="file" class="form-control mx-auto" name="img" id="img">
                </div>
                <div class="row m-4">
                  <input type="submit" value="SUBMIT" name="submit" id="submit" class="w-25 form-control">
                </div>
            </form>
        </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php
session_start();
include "../classes/article.class.php";

$getArticle = new getArticle;
$article = $getArticle->fetchID($_GET['id']);

$author = $getArticle->fetchUser($article[0]["auteur_id"]);

// $delete = $getArticle->deleteArticle($article[0]['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
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
        if($_SESSION["status"] === "admin"){
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

<section class="container w-25 my-5 d-flex justify-content-center align-items-center flex-column text-light css-selector">
  <small><?= $article[0]["date_time"]; ?></small>
  <h1><?= $article[0]["title"]; ?></h1>
  <img src="<?= $article[0]["image_url"]; ?>">
  <p><?= $article[0]["content"]; ?></p>
  <h4><?= $author[0]["username"]; ?></h4>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
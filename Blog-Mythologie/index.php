<?php
session_start();
include "classes/article.class.php";
$article = new getArticle;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body class="dark-background">
<!---class="css-selector"--->
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4 text">Mythologie Grecque</h5>
    <span class="text-muted">
      <a href="index.php" class="link-light link">Home</a>
      <?php if(!isset($_SESSION['userid'])){
        echo '<a href="view/login.php" class="link-light link mx-2">Log In</a>';
        echo  '<a href="view/signup.php" class="link-light link mx-2">Sign Up</a>';
      }else{
        echo '<a href="includes/logout.inc.php" class="link-light link mx-2">Log Out</a>';
        if($_SESSION["status"] === "admin"){
          echo  '<a href="view/create.php" class="link-light link mx-2">Add Article</a>';
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
<section class="container my-5 d-flex justify-content-center">
  <div class="list-group m-2 d-flex justify-content-center align-items-center w-50">
    <?php foreach($article->fetchArticle() as $article) : ?>
      <a href="view/article.php?id=<?= $article['id'];?>" class="css-selector list-group-item link-light bg-dark p-3 my-2">
        <h4><?= $article['title'] ?></h4>
        <p><?= substr($article['content'], 0, 100) ?> ...</p>
      </a>
    <?php endforeach;?>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

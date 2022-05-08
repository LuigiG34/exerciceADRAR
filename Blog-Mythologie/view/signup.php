<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Sytem | Object Oriented PHP</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="dark-background">
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4 text">Mythologie Grecque</h5>
    <span class="text-muted">
        <a href="../index.php" class="link-light link">Home</a>
        <a href="login.php" class="link-light link">Log In</a>
        <a href="signup.php" class="link-light link">Sign Up</a>
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
    <section class="p-5 m-5" style="border-radius: 15px;">
        <div class="container-lg shadow p-2 mx-auto w-50 css-selector">
            <div class="row">                    
                <div class="col">
                    <!--- formulaire d'inscription --->
                    <div id="frm" class="text-light p-2">
                        <h1 class="display-6 text-center">SIGNUP</h1>
                        <form action="../includes/signup.inc.php" method ="POST">             
                        <div class="container justify-content">
                        <div class="row">
                            <div class="row">
                            <p>
                                    <label>Username :</label>
                                    <input class="form-control" type = "text" id ="username" name ="username" placeholder="Enter Username.." require>
                            </p>
                            </div>
                            <div class="row">
                            <p>
                                    <label>Email :</label>
                                    <input class="form-control" type = "text" id ="email" name ="email" placeholder="Enter Username.." />
                            </p>
                            </div>
                            <div class="row">
                            <p>                           
                                    <label>Password :</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password.." require> 
                            </p>
                            </div>
                            <div class="row">
                            <p>
                                    <label>Password again :</label>
                                    <input class="form-control" type="password" id="re-password" name="re-password" placeholder="Re-enter Password.." require>
                            </p>
                            </div>
                            <p>
                                <input style="float: right;" class="btn btn-light" type="submit" id="btn" value="Sign Up" name="submit">
                            </p>
                         </div>
                        </form>
                    </div>
                    <!--- redirige vers connection si deja inscrit --->
                    <p><a class="link-dark" href="login.php">Already have an account ?</a></p>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
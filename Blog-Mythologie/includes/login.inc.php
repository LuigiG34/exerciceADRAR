<?php

if(isset($_POST['submit'])){
    //get data
    $username = $_POST['username'];
    $password = $_POST['password'];

    //signUpContr class
    include "../classes/database.class.php";
    include "../classes/login.class.php";
    include "../classes/login-cont.class.php";
    $login = new logInContr($username,$password);

    $login->logInUser();

    header('location: ../index.php?error=none');

}

?>
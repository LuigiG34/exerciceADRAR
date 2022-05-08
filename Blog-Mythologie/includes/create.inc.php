<?php

session_start();

if(isset($_POST['submit'])){
    $dir = '../assets/image/';
    $file = $_FILES['img'];
        try{
            if(!file_exists($dir)){
            mkdir($dir,0777);
            }

            $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            $random = rand(0,99999);
            $file['name'] = str_replace(" ", "_",$file['name']);
            $target_file = $dir.$random.".".$extension;

            if(!getimagesize($file['tmp_name'])){
                throw new Exception("error");
            }

            if($extension !== "jpg" && $extension !== "jpeg" && $extension !== "png"){
                throw new Exception("error format");
            }

            if($file['size'] > 1000000){
                throw new Exception("error size");
            }

            move_uploaded_file($file['tmp_name'], $target_file);
            $name = $dir.$random.".".$extension;

            //get data
            $title = $_POST['title']; 
            $content = $_POST['content'];
            $author = $_SESSION['userid'];
        
            //includes
            include "../classes/database.class.php";
            include "../classes/create.class.php";
            include "../classes/create-cont.class.php";
            
            $addArticle = new addArticleContr($author,$title,$content,$name);
        
            $addArticle->createNewArticle();
            if(!$addArticle){
                throw new Exception("error add article");
            }

            header('location: ../index.php?error=none');
            
        }catch(Exception $e){
            header('location: ../index.php?error='.$e->getMessage());
        }
}
?>
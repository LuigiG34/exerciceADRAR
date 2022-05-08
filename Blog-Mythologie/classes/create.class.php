<?php

class addArticle extends databaseCon {

    protected function createArticle($author,$title,$content,$img){
        $stmt = $this->connectDB()->prepare('INSERT INTO articles (auteur_id, title, content, image_url) VALUES (?, ?, ?, ?)');
        
        $author = $_SESSION['userid'];
        if(!$stmt->execute(array($author,$title,$content,$img))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;

    }
}

?>
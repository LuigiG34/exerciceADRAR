<?php

include "database.class.php";

class getArticle extends databaseCon {

    public function fetchArticle(){
        $stmt = $this->connectDB()->query('SELECT * FROM articles');
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function fetchID($id){
        $stmt = $this->connectDB()->query('SELECT * FROM articles WHERE id = '.$id);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function fetchUser($id){
        $stmt = $this->connectDB()->query('SELECT username FROM users WHERE id = '.$id);
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    // public function deleteArticle($id){
    //     $stmt = $this->connectDB()->query('DELETE * FROM users WHERE id = '.$id);
    //     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $data;
    // }
}

?>
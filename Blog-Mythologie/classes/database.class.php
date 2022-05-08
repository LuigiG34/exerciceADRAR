<?php

class databaseCon{
    protected function connectDB(){
        try{
            $db="blog";
            $dbhost="localhost";
            $dbport=3306;
            $dbuser="root";
            $dbpasswd="";
            $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET CHARACTER SET utf8");
            return $pdo;
        }catch(Exception $e){
            die('Erreur : ' .$e->getMessage());
        }
    }
}

?>
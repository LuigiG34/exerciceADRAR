<?php

class signUp extends databaseCon {

    protected function createUser($username,$password,$email,$status){
        $stmt = $this->connectDB()->prepare('INSERT INTO users (username, pass, email, user_status) VALUES (?, ?, ?, ?);');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if(!$stmt->execute(array($username,$hashedPassword,$email,$status))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }
        $stmt = null;

    }

    protected function checkUser($username,$email){
        $stmt = $this->connectDB()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');
        if(!$stmt->execute(array($username,$email))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        $checkResult = 0;
        if($stmt->rowCount() > 0){
            $checkResult = false;
        }else{
            $checkResult = true;
        }
        return $checkResult;
    }

}

?>
<?php
class logIn extends databaseCon {

    protected function getUser($username,$password){
        $stmt = $this->connectDB()->prepare('SELECT pass FROM users WHERE username = ? OR email = ?;');

        if(!$stmt->execute(array($username,$password))){
            $stmt = null;
            header("Location: ../index.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("Location: ../index.php?error=unknownuser");
            exit();
        }

        $hashedPassword = $stmt->fetchALL(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $hashedPassword[0]["pass"]);
        if($checkPassword == false){
            $stmt = null;
            header("Location: ../index.php?error=wrongpassword");
            exit();
        }elseif($checkPassword == true){
            $stmt = $this->connectDB()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND pass = ?;');

            if(!$stmt->execute(array($username,$username,$password))){
                $stmt = null;
                header("Location: ../index.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0){
                $stmt = null;
                header("Location: ../index.php?error=rowcount");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["id"];
            $_SESSION["username"] = $user[0]["username"];
            $_SESSION["status"] = $user[0]["user_status"];
            $stmt = null;
        }
    }
    
}
?>
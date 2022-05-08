<?php

class signUpContr extends signUp {
    protected $username;
    protected $password;
    protected $repassword;
    protected $email;
    protected $status;

    public function __construct($username,$password,$repassword,$email,$status){
        $this->username = $username;
        $this->password = $password;
        $this->repassword = $repassword;
        $this->email = $email;
        $this->status = $status;
    }

    public function signUpUser(){
        if($this->emptyInput() == false){
            header("Location; ../index.php/?error=emptyInput");
            exit();
        }
        if($this->invalidUsername() == false){
            header("Location; ../index.php/?error=username");
            exit();
        }
        if($this->invalidEmail() == false){
            header("Location; ../index.php/?error=email-error");
            exit();
        }
        if($this->passwordSame() == false){
            header("Location; ../index.php/?error=password-error");
            exit();
        }
        if($this->alreadyExist() == false){
            header("Location; ../index.php/?error=user-already-exist");
            exit();
        }

        $this->createUser($this->username,$this->password,$this->email,$this->status);
        
    }

    private function emptyInput(){
        $result = 0;
        if(empty($this->username) || empty($this->password) || empty($this->repassword) || empty($this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidUsername(){
        $result = 0;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){
        $result= 0;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function passwordSame(){
        $result= 0;
        if ($this->password !== $this->repassword ){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }

    private function alreadyExist(){
        $result= 0;
        if (!$this->checkUser(!$this->username, $this->email)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}
?>
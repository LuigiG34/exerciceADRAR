<?php
class logInContr extends logIn {
    protected $username;
    protected $password;


    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;

    }

    public function logInUser(){
        if($this->emptyInput() == false){
            header("Location; ../index.php/?error=emptyInput");
            exit();
        }
        $this->getUser($this->username, $this->password);
        
    }

    private function emptyInput(){
        $result = 0;
        if(empty($this->username) || empty($this->password) ){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}
?>
<?php

include_once "core/DataBase.php";

class AuthModel extends DataBase{
    
    public function createUser($name, $email, $password){
        $sqlsignup = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        return $this->connexion()->query($sqlsignup);
    }
    
    public function login($email, $password){
        $sqlLogin = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $this->connexion()->query($sqlLogin);

        if ($result->rowCount() > 0) 
        return true;
    else
    return false;
    }
}
?>
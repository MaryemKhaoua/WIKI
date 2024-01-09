<?php

include_once "core/DataBase.php";

class AuthModel extends DataBase{
    
    public function createUser($name, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $roleId = 1; 

        $sqlsignup = "INSERT INTO users (name, email, password, role_id) VALUES (:name, :email, :password, :roleId)";
        $stmt = $this->connexion()->prepare($sqlsignup);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':roleId', $roleId);
        $res = $stmt->execute();
        return $res;
    }
    
    public function login($email, $password) {
        $rqtLogin = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->connexion()->prepare($rqtLogin);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        if ($user !== false && password_verify($password, $user->password)) {
            return $user;
        }
        return false;
    }
    
}
?>
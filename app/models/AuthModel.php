<?php

namespace App\models;
use App\core\DataBase;
use PDO;
use PDOException;

class AuthModel extends DataBase {
    
    private $id;
    private $name;
    private $email;
    private $password;
    private $roleId;

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRoleId($roleId) {
        $this->roleId = $roleId;
    }

    public function createUser() {
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);

        $sqlSignup = "INSERT INTO users (name, email, password, role_id) VALUES (:name, :email, :password, :roleId)";
        $stmt = $this->connexion()->prepare($sqlSignup);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':roleId', $this->roleId);
        
        $res = $stmt->execute();
        return $res;
    }
    
    public function login() {
        $sqlLogin = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->connexion()->prepare($sqlLogin);
        $stmt->bindParam(':email', $this->email);
        
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        
        if ($user) {
            return $user;
        }
        return false;
    }
}
?>
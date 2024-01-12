<?php
namespace App\controllers;
use App\models\AuthModel;
class AuthController {
    
    public function signUp() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $userModel = new AuthModel();
            $userModel->setName($name);
            $userModel->setEmail($email);
            $userModel->setPassword($password);

            if ($userModel->createUser()) {
                echo "Register Successfully";
                require_once "app/views/SignIn.php";
            } else {
                echo "Registration failed!";
                require_once "app/views/register.php";
            }
        } else {
           echo "error";
        }
    }

    public function signIn() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $userModel = new AuthModel();
            $userModel->setEmail($email);
            $userModel->setPassword($password);
        
            $userData = $userModel->login();
        
            if ($userData) {
                if ($userData->role_id == 1) {
                    header("location: ?route=home");
                } else {
                    header("location: ?route=home");
                }
                
            } else {
                echo "Login failed";
            }
        } else {
            echo "error";
        }
    }
}
?>

<?php
include_once "app/models/AuthModel.php";

class AuthController {
    
    public function signUp($name,  $email, $password) {
        
        $ObjUser = new AuthModel();
        $signUpUser = $ObjUser->createUser($name, $email, $password);
        if ($signUpUser) {
            echo "Register Succefully";
            require_once "app/views/SignIn.php";
        } else {
            echo "Registration failed!";
            require_once "app/views/register.php";
        }
    }
    public function signIn($email, $password) {
        $userModel = new AuthModel();
        $userData = $userModel->login($email, $password);
    
        if ($userData) {
            if ($userData->role_id == 1) {
            require_once "app/views\AdminDashboard.php";
            } if ($userData->role_id == 3) {
                require_once "app/views\home.php";
            }
            var_dump($userData);
        } else {
            echo "Login faiiiled";
        }
    }
}
?>
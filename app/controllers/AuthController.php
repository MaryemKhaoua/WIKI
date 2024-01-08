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
    public function signIn($email, $password){
        $userModel = new AuthModel();
        $loginResult = $userModel->login($email, $password);
        if ($loginResult) {
            // var_dump($loginResult);
           require_once "app/views/home.php";
            
        } else {
            echo "error";
        }
    }

}
?>
<?php
include_once "app/models/UserModel.php";

class UserController {
    
    public function signUp($name,  $email, $password) {
        $ObjUser = new UserModel();
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
        $userModel = new UserModel();
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
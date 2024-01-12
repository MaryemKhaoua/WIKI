<?php
namespace App\controllers;
class HomeController{

    public function home(){
        require_once __DIR__.'/../../views/home.php';
        

    }
    public function register(){
        require_once __DIR__.'/../../views/register.php';
    }
    public function login(){
        require_once __DIR__.'/../../views/SignIn.php';
    }

}


?>
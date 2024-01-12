<?php

require_once __DIR__."/../vendor/autoload.php";

use App\controllers\AuthController;
use App\controllers\CatgController;
use App\controllers\HomeController;
use App\controllers\WikiController;

$userController = new AuthController();
$catgController = new CatgController();
$wikiController = new WikiController();


$route = isset($_GET['route']) ? $_GET['route'] : 'home';



    switch ($route) {

        case 'home' :
            $controller  = new HomeController();
            $controller->home();
            break;
        
        case 'register' :
            $controller  = new HomeController();
            $controller->register();
            break;
            case 'login' :
                $controller  = new HomeController();
                $controller->login();
                break;
        case 'signup':
            extract($_POST);
            $userController->signUp();
            break;
        case 'signin':
            extract($_POST);
            $userController->signIn();
            break;
        case 'addwiki': 
            isset($_POST['submit']);
            extract($_POST);
            $id_user = 2;
            $wikiController->AddWiki($title,$content,$id_user,$category,$tags);
            break;
    
    case 'addCatg':
        extract($_POST);
        $catgController->addCategory($catg);
        break;
        case 'getCatg':
            $categories = $catgController->getCategories();
            break;

        case 'updateCatg':
            extract($_POST);
            $catgController->updateCategory($catgId, $newCatgName);
            break;

        case 'deleteCatg':
            extract($_POST);
            $catgController->deleteCategory($catgId);
            break;
            
    }

?>

<?php
include_once "app/controllers/UserController.php";

$userController = new UserController();


if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'signup':
            extract($_POST);
            $userController->signUp($name, $email, $password);
            break;
        case 'login':
            extract($_POST);
            $userController->signIn($email, $password);
            break;
    }
}

?>

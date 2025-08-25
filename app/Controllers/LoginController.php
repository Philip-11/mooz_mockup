<?php

require_once "../Core/Database.php";
require_once "../Models/User.php";
require_once "../Core/Session.php";

define("BASE_URL", "/mooz_mockup/");

Session::start();

$conn = Database::connect();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim(htmlspecialchars($_POST['email'], ENT_HTML5, 'UTF-8'));
    $password = trim(htmlspecialchars($_POST['password'], ENT_HTML5, 'UTF-8'));

    $user = new User($email, $password, $conn);



    if ($user->login()) {
        $data = $user->getUserData();
        $_SESSION['logged_in'] = true;
        $_SESSION['id'] = $data['id'];
        $_SESSION['email'] = $data['email'];

        header("Location: " . BASE_URL . "index.php");
        exit();
    } else {
        $_SESSION['error'] = true;
        header("Location: " . BASE_URL . "app/Views/LoginForm.php?error=1");
        exit();
    }
}

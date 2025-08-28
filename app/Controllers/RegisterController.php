<?php

require_once "../Core/Database.php";
require_once "../Models/User.php";
require_once "../Core/Session.php";

define("BASE_URL", "/mooz_mockup/");

Session::start();
$conn = Database::connect();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = trim(htmlspecialchars($_POST['email'], ENT_HTML5, 'UTF-8'));
    $password = trim(htmlspecialchars($_POST['password'], ENT_HTML5, 'UTF-8'));

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $user = new User($email, $hashed_password, $conn);

    if ($user->register()) {
        header("Location: " . BASE_URL . "app/Views/RegisterForm.php?success=1");
        exit();
    }
}

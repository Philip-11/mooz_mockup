<?php

session_start();

require_once "../Core/Database.php";
require_once "../Models/User.php";

$conn = Database::connect();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim(htmlspecialchars($_POST['email'], ENT_HTML5, 'UTF-8'));
    $password = trim(htmlspecialchars($_POST['password'], ENT_HTML5, 'UTF-8'));

    $user = new User($email, $password, $conn);



    if ($user->login()) {
        $_SESSION['logged_in'] = true;
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];

        header("Location: " . BASE_URL . "index.php");
        exit();
    } else {
        $loginFailed = true;
    }
}

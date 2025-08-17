<?php
define("BASE_URL", "/mooz_mockup/");

$favicon = '<link rel="Mooz icon" href="/mooz_mockup/public/index/cow-svgrepo-com.svg" type="image/x-icon">';

session_start();

function htmlEscape($html)
{
    return htmlspecialchars($html, ENT_HTML5, 'UTF-8');
}

function isOldPassword($newPasswordAttempt, $email, $conn)
{
    $sql = 'SELECT password FROM users WHERE email = :email';
    $stmt = $conn->prepare($sql);
    $stmt->execute(array('email' => $email));
    $user = $stmt->fetch();

    if ($stmt && password_verify($newPasswordAttempt, $user['password'])) {
        return true;
    }
    return false;
}

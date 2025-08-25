<?php
define("BASE_URL", "/mooz_mockup/");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$favicon = '<link rel="Mooz icon" href="/mooz_mockup/public/index/cow-svgrepo-com.svg" type="image/x-icon">';

//session_start();

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

function sendPasswordEmail($email, $config, $conn)
{
    $sql = "SELECT id FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array('email' => $email));

    if ($stmt->fetch()) {
        //We generate token for security
        $token = bin2hex(random_bytes(16));
        $hashed_token = password_hash($token, PASSWORD_DEFAULT);
        $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

        //We store it in database
        $sql2 = "UPDATE users SET reset_token = :reset_token, reset_expires = :reset_expires WHERE email = :email";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->execute(array('reset_token' => $hashed_token, 'reset_expires' => $expires, 'email' => $email));

        //The reset link
        $resetLink = "http://" . $config['local_ip'] . BASE_URL . "pages/resetpass.php?email=" . urlencode($email) . "&token=" . $token;

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            //For debug purposes
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->Host = $config['smtp_host'];
            $mail->SMTPAuth = true;
            $mail->Username = $config['smtp_user'];
            $mail->Password = $config['smtp_pass'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = $config['smtp_port'];

            $mail->setFrom($config['smtp_user'], $config['smtp_name']);
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Request on Mooz';
            //Get email template with variables 
            ob_start();
            include '../templates/emailtemplate.php';
            $body = ob_get_clean();
            $mail->Body = $body;
            $mail->AltBody = "Copy this link in your browser: $resetLink";

            $mail->send();
            return true;
        } catch (Exception $e) {
            echo "Error sending the email: {$mail->ErrorInfo}";
        }
    } else {
        return false;
    }
}

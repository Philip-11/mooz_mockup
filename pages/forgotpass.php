<?php 

require_once '../lib/connect.php';
require $_SERVER['DOCUMENT_ROOT'] . '/libs/PHPMailer-master/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] .'/libs/PHPMailer-master/src/SMTP.php';
require $_SERVER['DOCUMENT_ROOT'] .'/libs/PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $email = htmlEscape($_POST['email'] ?? '');

    if ($email)
    {
        $sql = "SELECT id FROM users WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array('email' => $email));

        if ($stmt->fetch())
        {
            //We generate token for security
            $token = bin2hex(random_bytes(16));
            $hashed_token = password_hash($token, PASSWORD_DEFAULT);
            $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

            //We store it in database
            $sql2 = "UPDATE users SET reset_token = :reset_token, reset_expires = :reset_expires WHERE email = :email";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->execute(array('reset_token' => $hashed_token, 'reset_expires' => $expires, 'email' => $email));

            //The reset link
            $resetLink = "https://philip-11.ct.ws/reset-password?email=" . urlencode($email) . "&token=" . $token;

            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = '';
                $mail->Password = '';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom();
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Password Reset Request';
                $mail->Body = "Click the link below to reset your password:<br> <a href='$resetLink'>$resetLink</a><br><br> This link expires in 1 hour.";
                $mail->AltBody = "Copy this link in your browser: $resetLink";

                $mail->send();
                echo "Check your email for a reset link";
            } catch (Exception $e)
            {
                echo "Error sending the email: {$email->ErrorInfo}";
            }
        } else {
            echo "Email not found";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Change Password</title>
</head>
<body>
	<?php require '../templates/header.php'; ?>

	<main>
        <section class="container px-4 py-5">
            <div class="w-100 mx-auto" style="max-width: 330px;">
                <form action="<?php echo htmlEscape($_SERVER['PHP_SELF']); ?>" method="post">
                    <img class="mb-4" src="<?php echo BASE_URL ?>public/index/cow-svgrepo-com.svg" width="50" height="50" alt="">

                    <h1 class="h3 mb-3 fw-bold">Forgot Password</h1>

                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo ($loginFailed == true) ? 'is-invalid' : '' ?>" type="email" name="email" id="email" placeholder="name@example.com" required>
                        <label for="email">Email address</label>
                        <div id="email" class="invalid-feedback">
                            Please check the email you typed.
                        </div>
                    </div>
                    
                    <p class="mb-3 text-body-secondary">By proceeding, you agree to our terms and services</p>

                    <button class="btn btn-primary w-100 py-2" type="submit">Send Reset Link</button>

                </form>
            </div>
        </section>

    </main>

	<?php require '../templates/footer.php'; ?>
	<?php require '../lib/bootstrap.php'; ?>
</body>
</html>
<?php

require_once '../lib/connect.php';
$config = require '../config.php';
require $_SERVER['DOCUMENT_ROOT'] . '/libs/PHPMailer-master/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/libs/PHPMailer-master/src/SMTP.php';
require $_SERVER['DOCUMENT_ROOT'] . '/libs/PHPMailer-master/src/Exception.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlEscape($_POST['email'] ?? '');

    if ($email) {
        $mailSent = sendPasswordEmail($email, $config, $conn);
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
                        <input class="form-control <?php if ($mailSent === false) {
                                                        echo 'is-invalid';
                                                    } elseif ($mailSent === true) {
                                                        echo 'is-valid';
                                                    } else {
                                                        echo '';
                                                    } ?>" type="email" name="email" id="email" placeholder="name@example.com" required>
                        <label for="email">Email address</label>
                        <div id="email" class="invalid-feedback">
                            Please check the email you typed.
                        </div>
                        <div id="email" class="valid-feedback"> Reset Link Sent! Please check your spam folder too!</div>
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
<?php
require_once '../lib/common.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset your password</title>
    <?php require '../lib/bootstrap.php'; ?>
</head>

<body>
    <?php require 'header.php' ?>
    <main>
        <section class="container px-4 py-5">
            <div class="w-100 mx-auto" style="max-width: 330px;">
                <form method="POST">
                    <img class="mb-4" src="<?php echo BASE_URL; ?>public/index/cow-svgrepo-com.svg" width="50" height="50" alt="">

                    <h1 class="h3 mb-3 fw-bold">Change Your Password</h1>

                    <div class="form-floating mb-3">
                        <input type="hidden" name="email" value="<?= htmlEscape($email) ?>">
                        <input type="hidden" name="token" value="<?= htmlEscape($token) ?>">
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo ($passwordCheck === false) ? 'is-invalid' : ''
                                                    ?>" type="password" name="newpassword" id="newpassword" placeholder="password" required>
                        <label for="newpassword">New Password</label>
                        <div id="newpassword" class="invalid-feedback">
                            Please use a new password
                        </div>
                    </div>

                    <button class="btn btn-primary w-100 py-2" type="submit">Change Password</button>

                </form>
            </div>
        </section>
        <?php require 'footer.php' ?>
    </main>
</body>

</html>
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
                <form action="<?php echo htmlEscape($_SERVER['PHP_SELF']); ?>" method="post">
                    <img class="mb-4" src="<?php echo BASE_URL; ?>public/index/cow-svgrepo-com.svg" width="50" height="50" alt="">

                    <h1 class="h3 mb-3 fw-bold">Change Your Password</h1>

                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo ($loginFailed == true) ? 'is-invalid' : '' ?>" type="password" name="old-password" id="old-password" placeholder="" required>
                        <label for="old-password">Old Password</label>
                        <div id="old-password" class="invalid-feedback">
                            Please check the password you typed.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input class="form-control <?php echo ($loginFailed == true) ? 'is-invalid' : '' ?>" type="password" name="new-password" id="new-password" placeholder="password" required>
                        <label for="new-password">New Password</label>
                        <div id="new-password" class="invalid-feedback">
                            Please check the password you typed.
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
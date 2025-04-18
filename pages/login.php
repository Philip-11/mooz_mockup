<?php
require_once '../lib/common.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php require '../templates/header.php' ?>

    <main>
        <section class="container px-4 py-5">
            <div class="w-100 mx-auto" style="max-width: 330px;">
                <form action="" method="post">
                    <img class="mb-4" src="<?php echo BASE_URL ?>public/index/cow-svgrepo-com.svg" width="50" height="50" alt="">
                    <h1 class="h3 mb-3 fw-normal">Login</h1>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="email" name="email" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" type="password" name="password" id="password" placeholder="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-check text-start my-3">
                        <input type="checkbox" name="checkDefault" id="checkDefault" class="form-check-input" value="remember-me">
                        <label class="form-check-label" for="checkDefault">Remember me</label>
                    </div>
                    <p class="mb-3 text-body-secondary">By proceeding, you agree to our terms and services</p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                </form>
            </div>
        </section>

    </main>

    <?php require '../templates/footer.php' ?>
    <?php require '../lib/bootstrap.php' ?>
</body>

</html>
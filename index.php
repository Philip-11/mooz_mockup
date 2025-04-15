<?php
require_once 'lib/common.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mooz</title>
    <?php echo $favicon ?>
</head>

<body>

    <main>
        <div class="container shadow-lg bg-body-tertiary rounded">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-md-auto fs-3 link-body-emphasis text-decoration-none">
                        <img style="width: 25px; height: 100%; margin: 10px" src="public/cow-svgrepo-com.svg" alt="A cow" srcset="">
                        <span>Mooz</span>
                    </a>
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link px-2 link-secondary" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="">
                            Pricing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="">
                            Business
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="">
                            Education
                        </a>
                    </li>
                </ul>

                <div class="col-md-3 text-end">
                    <button class="btn btn-outline-primary me-2">Login</button>
                    <button class="btn btn-primary">Signup</button>
                </div>
            </header>
        </div>

        <section class="container px-4 py-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" width="72" height="57" src="public/cow-svgrepo-com.svg" alt="A Cow">
            <h1 class="display-5 fw-bold text-body-emphasis">Mooz</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">
                    A revolutionary video-conferencing app. <br> Connect with your <strong>Cow</strong>orkers and <strong>Cow</strong>leagues.
                </p>
                <div class="d-sm-flex gap-2 justify-content-sm-center">
                    <button class="btn btn-lg btn-outline-primary">Login</button>
                    <button class="btn btn-lg btn-primary">Signup</button>
                </div>
            </div>
        </section>

        <section class="container">

        </section>
    </main>

    <?php require 'lib/bootstrap.php' ?>
</body>

</html>
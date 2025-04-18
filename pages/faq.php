<?php require_once '../lib/common.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <?= $favicon ?>
</head>

<body>
    <?php require '../templates/header.php' ?>

    <main class="container py-3">
        <section class="container px-4 py-5">
            <div class="p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal text-body-emphasis">Frequently Asked Questions</h1>
            </div>
        </section>

        <section class="container py-3">
            <div class="border-bottom px-2">
                <a class="text-body-emphasis text-decoration-none" data-bs-toggle="collapse" href="#answer1" role="button">
                    <p class="fs-3">What is Mooz?</p>
                </a>
            </div>
            <div class="collapse px-2" id="answer1">
                <p class="fs-5">Mooz is a modern video conferencing platform for cows, humans, and anyone in between. Whether you're chewing grass or leading a meeting, Mooz has your back.</p>
            </div>

            <div class="border-bottom px-2">
                <a class="text-body-emphasis text-decoration-none" data-bs-toggle="collapse" href="#answer2" role="button">
                    <p class="fs-3">Is Mooz free?</p>
                </a>
            </div>
            <div class="collapse px-2" id="answer2">
                <p class="fs-5">Yes! The basic plan gives you anything you need. If you want more, you can access our Pro plan for a discount!</p>
            </div>

            <div class="border-bottom px-2">
                <a class="text-body-emphasis text-decoration-none" data-bs-toggle="collapse" href="#answer3" role="button">
                    <p class="fs-3">How many can join in a call?</p>
                </a>
            </div>
            <div class="collapse px-2" id="answer3">
                <p class="fs-5">As many as you want, depending on your plan</p>
            </div>

            <div class="border-bottom px-2">
                <a class="text-body-emphasis text-decoration-none" data-bs-toggle="collapse" href="#answer4" role="button">
                    <p class="fs-3">What is Sign Language Support?</p>
                </a>
            </div>
            <div class="collapse px-2" id="answer4">
                <p class="fs-5">Mooz detects your hand (even if you dont have a hand) for seamless visual communication - powered by our powerful Artificial Intelligence</p>
            </div>

            <div class="border-bottom px-2">
                <a class="text-body-emphasis text-decoration-none" data-bs-toggle="collapse" href="#answer5" role="button">
                    <p class="fs-3">What's the difference between plans?</p>
                </a>
            </div>
            <div class="collapse px-2" id="answer5">
                <p class="fs-5">You can check our <a href="../pages/pricing.php">pricing page</a> to compare what options are best for you</p>
            </div>
        </section>

        <section class="container py-3"></section>
    </main>

    <?php require '../templates/footer.php' ?>
    <?php require '../lib/bootstrap.php' ?>
</body>

</html>
<?php require_once '../lib/common.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <?= $favicon ?>
</head>

<body>
    <?php require '../templates/header.php' ?>

    <main>
        <section class="container px-4 py-5">
            <div class="p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
                <p class="fs-3 text-body-secondary">For every need, we got it.</p>
            </div>
        </section>

        <section class="container px-4 py-5">
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header">
                            <h4 class="fw-normal">Basic</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">
                                Free<small class="fw-light text-body-secondary"></small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>1 user ✅</li>
                                <li>1 hour max of meeting ✅</li>
                                <li>Team Chat ✅</li>
                                <li>100 Participants ✅</li>
                            </ul>
                            <button class="w-100 btn btn-lg btn-outline-primary">Sign up</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-4 border-info rounded-3 shadow-sm">
                        <div class="card-header text-bg-info border-info">
                            <h4 class="fw-normal">Pro</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">
                                5$<small class="fw-light text-body-secondary">/m</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>
                                    <p class="d-inline text-body-secondary">Everything in basic plus:</p>
                                </li>
                                <li>Notes ✅</li>
                                <li>Document ✅</li>
                                <li>Custom Avatar ✅</li>
                            </ul>
                            <button class="w-100 btn btn-lg btn-outline-info">Get Started</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card border-primary mb-4 rounded-3 shadow-sm">
                        <div class="card-header text-bg-primary border-primary">
                            <h4 class="fw-normal ">Business</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title">
                                20$<small class="fw-light text-body-secondary">/m</small>
                            </h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>
                                    <p class="d-inline text-body-secondary">Everything in pro plus:</p>
                                </li>
                                <li>Voicemails ✅</li>
                                <li>Scheduler ✅</li>
                                <li>Whiteboard ✅</li>
                            </ul>
                            <button class="w-100 btn btn-lg btn-outline-primary">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>

    <?php require '../templates/footer.php' ?>
    <?php require '../lib/bootstrap.php' ?>
</body>

</html>
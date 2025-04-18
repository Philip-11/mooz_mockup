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

    <main class="container py-3">
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

        <section class="container table-responsive">
            <h2 class="display-6 text-center mb-4">Compare Features</h2>
            <table class="table text-center">
                <thead>
                    <tr>
                        <!-- <div class="form-check form-switch">
                            <label class="form-check-text" for="switchCheck">Monthly</label>
                            <input class="form-check-input" type="checkbox" role="switch" name="switchCheck" id="">
                            <label class="form-check-text" for="switchCheck">Yearly</label>
                        </div> -->
                        <th style="width: 33%;">

                        </th>
                        <th style="width: 28%;">Free</th>
                        <th style="width: 28%;">Pro</th>
                        <th style="width: 28%;">Business</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-start" scope="row">Users</th>
                        <td>1</td>
                        <td>1-50</td>
                        <td>1-200</td>
                    </tr>
                    <tr>
                        <th class="text-start" scope="row">Meeting Duration</th>
                        <td>1 hour</td>
                        <td>30 hours</td>
                        <td>30 hours</td>
                    </tr>
                    <tr>
                        <th class="text-start" scope="row">Participants</th>
                        <td>100</td>
                        <td>100</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <th class="text-start" scope="row">Team Chat</th>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-start" scope="row">Notes</th>
                        <td>

                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-start" scope="row">Document</th>
                        <td>

                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-start" scope="row">Custom Avatar</th>
                        <td>

                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-start" scope="row">Voicemails</th>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-start" scope="row">Scheduler</th>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-start" scope="row">Whiteboard</th>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                            </svg>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <?php require '../templates/footer.php' ?>
    <?php require '../lib/bootstrap.php' ?>
</body>

</html>
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
                            FAQ
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

        <section class="container px-4 py-5">
            <h2 class="pb-2 border-bottom">Features of <strong>Mooz</strong></h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <div class="col d-flex align-items-start">
                    <img class="flex-shrink-0 me-3" src="public/paragraph-capital-svgrepo-com.svg" width="30" height="52" alt="Captions Icon">
                    <div>
                        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Subtitles</h3>
                        <p>You can now understand what your <strong>Cow</strong>orker's speaking even if its gibberish!</p>
                    </div>
                </div>

                <div class="col d-flex align-items-start">
                    <img class="flex-shrink-0 me-3" src="public/people-gesture-svgrepo-com.svg" width="30" height="52" alt="Captions Icon">
                    <div>
                        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Sign Language Support</h3>
                        <p>For users that has fingers and can do it. Uses cutting-edge technology detector and supports <strong>cows</strong>.</p>
                    </div>
                </div>

                <div class="col d-flex align-items-start">
                    <img class="flex-shrink-0 me-3" src="public/lamp-svgrepo-com.svg" width="30" height="52" alt="Captions Icon">
                    <div>
                        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Lighting</h3>
                        <p>Having problems in finding the right lighting? No worries, with <strong>Mooz,</strong> you don't need to worry about finding the right spot in your room.</p>
                    </div>
                </div>

                <div class="col d-flex align-items-start">
                    <img class="flex-shrink-0 me-3" src="public/groups-svgrepo-com.svg" width="30" height="52" alt="Captions Icon">
                    <div>
                        <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Real-time Collab</h3>
                        <p>Video meeting? Group Chats? Any kind of collab is right here in <strong>Mooz</strong>.</p>
                    </div>
                </div>


            </div>
        </section>

        <section class="container px-4 py-5 shadow rounded">
            <h2 class="text-center fw-bold pb-2">Trusted by many, loved by many</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-2 g-4">
                <div class="col">
                    <div class="d-flex align-items-center px-3">
                        <div style="width: 10rem; height: 10rem; border-radius: 100%; overflow:hidden; " class="px-3">
                            <img src="public/id1.jpg" style="object-fit:cover;" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>Johnyela Mayo</h4>
                            <h5>Virtual Assistant</h5>
                            <p class="fw-semibold py-3">Mooz really changes how I communicate with my clients. Truly revolutionary. <br> ⭐⭐⭐⭐⭐</p>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="d-flex align-items-center px-3">
                        <div style="width: 10rem; height: 10rem; border-radius: 100%; overflow:hidden; " class="px-3">
                            <img src="public/id2.jpg" style="object-fit:cover;" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>John Philip Magsaysay</h4>
                            <h5>Virtual Assistant</h5>
                            <p class="fw-semibold py-3">Mooz really changes how I communicate with my clients. Truly revolutionary. <br> ⭐⭐⭐⭐⭐</p>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="d-flex align-items-center px-3">
                        <div style="width: 10rem; height: 10rem; border-radius: 100%; overflow:hidden; " class="px-3">
                            <img src="public/id2.jpg" style="object-fit:cover;" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>John Philip Magsaysay</h4>
                            <h5>Virtual Assistant</h5>
                            <p class="fw-semibold py-3">Mooz really changes how I communicate with my clients. Truly revolutionary. <br> ⭐⭐⭐⭐⭐</p>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="d-flex align-items-center px-3">
                        <div style="width: 10rem; height: 10rem; border-radius: 100%; overflow:hidden; " class="px-3">
                            <img src="public/id1.jpg" style="object-fit:cover;" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h4>Johnyela Mayo</h4>
                            <h5>Virtual Assistant</h5>
                            <p class="fw-semibold py-3">Mooz really changes how I communicate with my clients. Truly revolutionary. <br> ⭐⭐⭐⭐⭐</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="container d-flex my-4 px-4 py-5 rounded">
            <div class="shadow-lg rounded m-4 p-4">
                <div class="">
                    <h2 class="fw-bold">Get Started with Mooz</h2>
                    <p>Sign up for free or choose from one of our flexible plans that meet your unique needs</p>
                    <button class="btn btn-primary rounded-pill">View pricing</button>
                </div>

                <div class="d-flex justify-content-between text-center m-4 p-4">
                    <div class="shadow-lg p-2 rounded ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-android" viewBox="0 0 16 16">
                            <path d="M2.76 3.061a.5.5 0 0 1 .679.2l1.283 2.352A8.9 8.9 0 0 1 8 5a8.9 8.9 0 0 1 3.278.613l1.283-2.352a.5.5 0 1 1 .878.478l-1.252 2.295C14.475 7.266 16 9.477 16 12H0c0-2.523 1.525-4.734 3.813-5.966L2.56 3.74a.5.5 0 0 1 .2-.678ZM5 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m6 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                        </svg>
                        <p>⭐⭐⭐⭐⭐</p>
                    </div>

                    <div class="shadow-lg p-2 rounded ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
                            <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282" />
                            <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282" />
                        </svg>
                        <p>⭐⭐⭐⭐⭐</p>
                    </div>

                    <div class="shadow-lg p-2 rounded ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                        </svg>
                        <p>⭐⭐⭐⭐⭐</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="shadow-lg rounded m-4 p-4">
                    <div>
                        <h2 class="fw-bold">Already a customer?</h2>
                        <p>Download Mooz to experience revolutionary video conferencing</p>
                        <a href="" class="fs-5">Download now ></a>
                    </div>
                </div>

                <div class="shadow-lg rounded m-4 p-4">
                    <div>
                        <h2 class="fw-bold">Request more information</h2>
                        <p>Learn more from our team of experts</p>
                        <a href="" class="fs-5">Learn more ></a>
                    </div>
                </div>
            </div>

        </section>

        <footer class="container py-5 border-top">
            <div class="row">
                <div class="col-4 col-md-2 mb-3">
                    <h5>About</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">FAQ</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Our Team</a>
                        </li>
                    </ul>
                </div>

                <div class="col-4 col-md-2 mb-3">
                    <h5>Resources</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Business</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Education</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Help Center</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">API Documentation</a>
                        </li>
                    </ul>
                </div>

                <div class="col-2 col-md-2 mb-3">
                    <h5>Legal</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Terms and Services</a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-body-secondary">Privacy Policy</a>
                        </li>

                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">

                </div>
            </div>

        </footer>
    </main>

    <?php require 'lib/bootstrap.php' ?>
</body>

</html>
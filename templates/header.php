<?php

$currentPage = basename($_SERVER['PHP_SELF']);

?>
<div class="container shadow-lg rounded">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="<?php echo BASE_URL; ?>index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-md-auto fs-3 link-body-emphasis text-decoration-none">
                <img style="width: 25px; height: 100%; margin: 10px" src="<?= BASE_URL; ?>public/index/cow-svgrepo-com.svg" alt="A cow" srcset="">
                <span>Mooz</span>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="nav-item">
                <a class="nav-link px-2 <?php echo ($currentPage === 'index.php') ? 'link-secondary' : ''; ?>" href="<?php echo BASE_URL; ?>index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 <?php echo ($currentPage === 'features.php') ? 'link-secondary' : ''; ?>" href="<?php echo BASE_URL; ?>pages/features.php">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 <?php echo ($currentPage === 'pricing.php') ? 'link-secondary' : ''; ?>" href="<?php echo BASE_URL; ?>pages/pricing.php">
                    Pricing
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-2 <?php echo ($currentPage === 'faq.php') ? 'link-secondary' : ''; ?>" href="<?php echo BASE_URL; ?>pages/faq.php">
                    FAQ
                </a>
            </li>
        </ul>

        <div class="col-md-3 text-end">
            <?php
            if (isset($_SESSION['logged_in'])) {
                echo '<a class="btn btn-primary me-2" href="' . BASE_URL . 'logout.php">Logout</a>';
            } else {
                echo '
                <a class="btn btn-outline-primary me-2" href="' . BASE_URL . 'pages/login.php">Login</a>
                <a class="btn btn-primary me-2" href="' . BASE_URL . 'pages/signup.php">Signup</a>
                ';
            }
            ?>

        </div>
    </header>
</div>
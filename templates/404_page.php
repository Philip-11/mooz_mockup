<?php
require_once '../lib/common.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <?php require '../lib/bootstrap.php'; ?>
</head>

<body>
    <?php require 'header.php' ?>

    <main>
        <section class="container px-4 py-5">
            <div class="w-100 mx-auto" style="max-width: 330px;">
                <img src="<?php echo BASE_URL ?>public/index/cow-svgrepo-com.svg" alt="" class="mb-4" width="100" height="100">
                <h1 class="h3 mb-3 fw-bold">Uh oh, You're not supposed to be here. (404)</h1>
            </div>
        </section>
    </main>
    <?php require 'footer.php' ?>
</body>

</html>
<?php
require '../lib/common.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>
    <?php echo $favicon ?>
</head>

<body>
    <?php require '../templates/header.php' ?>

    <section class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Mooore Features of <strong>Mooz</strong></h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <div class="col d-flex align-items-start">
                <img class="flex-shrink-0 me-3" src="<?= BASE_URL; ?>public/index/paragraph-capital-svgrepo-com.svg" width="30" height="52" alt="Captions Icon">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Subtitles</h3>
                    <p>You can now understand what your <strong>Cow</strong>orker's speaking even if its gibberish!</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <img class="flex-shrink-0 me-3" src="<?= BASE_URL; ?>public/index/people-gesture-svgrepo-com.svg" width="30" height="52" alt="Captions Icon">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Sign Language Support</h3>
                    <p>For users that has fingers and can do it. Uses cutting-edge technology detector and supports <strong>cows</strong>.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <img class="flex-shrink-0 me-3" src="<?= BASE_URL; ?>public/index/lamp-svgrepo-com.svg" width="30" height="52" alt="Captions Icon">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Lighting</h3>
                    <p>Having problems in finding the right lighting? No worries, with <strong>Mooz,</strong> you don't need to worry about finding the right spot in your room.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <img class="flex-shrink-0 me-3" src="<?= BASE_URL; ?>public/index/groups-svgrepo-com.svg" width="30" height="52" alt="Captions Icon">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Real-time Collab</h3>
                    <p>Video meeting? Group Chats? Any kind of collab is right here in <strong>Mooz</strong>.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <img class="flex-shrink-0 me-3" src="<?= BASE_URL; ?>public/features/layout-3-svgrepo-com.svg" width="30" height="52" alt="Grid Icon">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Pasture View</h3>
                    <p>See all your participants in a tiled grid. You can even zoom in to spot the grass in their teeth.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <img class="flex-shrink-0 me-3" src="<?= BASE_URL; ?>public/features/mic-svgrepo-com.svg" width="30" height="52" alt="Grid Icon">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Voice Moodifier</h3>
                    <p>Change your voice to sound like a human or a <strong>cow</strong>.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <img class="flex-shrink-0 me-3" src="<?= BASE_URL; ?>public/features/emoji-cool-2-svgrepo-com.svg" width="30" height="52" alt="Grid Icon">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Emoooji Reactions</h3>
                    <p>Show your reactions without the need to open your camera.</p>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <img class="flex-shrink-0 me-3" src="<?= BASE_URL; ?>public/features/emoji-cool-2-svgrepo-com.svg" width="30" height="52" alt="Grid Icon">
                <div>
                    <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">"Cheese!" Screenshot Capture</h3>
                    <p>Automatically takes a screenshot when someone says "Cheese".</p>
                </div>
            </div>


        </div>
    </section>

    <section class="container text-center px-4 py-5">
        <h1 class=" fw-bold ">And moooore.</h1>
    </section>

    <?php require '../templates/footer.php' ?>
    <?php require '../lib/bootstrap.php' ?>
</body>

</html>
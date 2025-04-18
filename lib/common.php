<?php
define("BASE_URL", "/mooz_mockup/");

$favicon = '<link rel="Mooz icon" href="/mooz_mockup/public/index/cow-svgrepo-com.svg" type="image/x-icon">';


function htmlEscape($html)
{
    return htmlspecialchars($html, ENT_HTML5, 'UTF-8');
}

<?php
require_once "app/Core/Session.php";

Session::start();
Session::destroy();

header("Location: index.php");
exit();

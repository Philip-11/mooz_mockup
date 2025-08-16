<?php
require 'connect.php';

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
{
    header("Location: " . BASE_URL . "pages/login.php");
    exit();
}
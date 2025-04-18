<?php

require_once '../lib/common.php';

try {
    $conn = new PDO("mysql:host=localhost;dbname=mooz_db", 'root', 'root');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}

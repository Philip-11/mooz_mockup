<?php

require_once '../lib/connect.php';


$email = $_GET['email'] ?? '';
$token = $_GET['token'] ?? '';

if ($email && $token) {
	$sql = 'SELECT reset_token, reset_expires FROM users WHERE email = :email';
	$stmt = $conn->prepare($sql);
	$stmt->execute(array('email' => $email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	if (password_verify($token, $row['reset_token']) && strtotime($row['reset_expires']) > time()) {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$email = trim($_POST['email']);
			$token = $_POST['token'];
			$password = trim($_POST['newpassword']);
			$newPassword = password_hash($password, PASSWORD_DEFAULT);

			$sql2 = 'UPDATE users SET password = :password, reset_token=NULL, reset_expires=NULL WHERE email = :email';
			$stmt2 = $conn->prepare($sql2);
			$stmt2->execute(array('password' => $newPassword, 'email' => $email));


			header("Location: " . BASE_URL . "pages/login.php?reset=success");
		} else {
			require '../templates/resetpass-form.php';
		}
	} else {
		echo "Invalid or expired token";
	}
} else {
	echo "Invalid or expired token";
}

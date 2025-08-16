<?php 

require_once '../lib/connect.php';

$email = $_GET['email'] ?? '';
$token = $_GET['token'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$email = htmlEscape($_POST['email']);
	$token = $_POST['token'];
	$password = htmlEscape($_POST['password']);
	$newPassword = password_hash($password, PASSWORD_DEFAULT);

	$sql = 'SELECT reset_token, reset_expires FROM users WHERE email = :email';
	$stmt = $conn->prepare($sql);
	$stmt->execute(array('email' => $email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);


	if (password_verify($token, $row['reset_token']) && strtotime($row['reset_expires']) > time())
	{
		$sql2 = 'UPDATE users SET password = :password, reset_token=NULL, reset_expires=NULL WHERE email = :email';
		$stmt2 = $conn->prepare($sql2);
		$stmt2->execute(array('password' => $newPassword, 'email' => $email));
		echo "Password has been updated";
	} else {
		echo "Invalid or expired token";
	}
} else {
	echo '<form method="POST">
            <input type="hidden" name="email" value="'.htmlEscape($email).'">
            <input type="hidden" name="token" value="'.htmlEscape($token).'">
            <label>New Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Reset Password</button>
          </form>';
}

?>
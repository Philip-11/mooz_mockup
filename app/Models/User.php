<?php
require_once '../core/Database.php';



class User
{
    private $email;
    private $password;
    private $conn;

    function __construct($email, $password, $conn)
    {
        $this->email = $email;
        $this->password = $password;
        $this->conn = $conn;
    }

    function login(): bool
    {
        $email = htmlspecialchars($this->email, ENT_HTML5, 'UTF-8');
        $password = htmlspecialchars($this->password, ENT_HTML5, 'UTF-8');

        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array(
            'email' => $email,
        ));
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['id'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            header("Location: " . BASE_URL . "index.php");
            exit();
        } else {
            return false;
        }

        return true;
    }
}

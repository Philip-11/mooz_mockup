<?php
require_once "../Core/Database.php";



class User
{
    private $email;
    private $password;
    private $conn;
    private $userData;

    function __construct($email, $password, $conn)
    {
        $this->email = $email;
        $this->password = $password;
        $this->conn = $conn;
    }

    function login(): bool
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array(
            'email' => $this->email,
        ));
        $user = $stmt->fetch();


        //will return true if successful login
        if ($user && password_verify($this->password, $user['password'])) {
            $this->userData = $user;
            return true;
        }

        return false;
    }

    function getUserData(): array
    {
        return $this->userData;
    }
}

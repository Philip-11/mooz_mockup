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
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array(
            'email' => $this->email,
        ));
        $user = $stmt->fetch();


        //will return true if successful login
        return $user && password_verify($this->password, $user['password']);
    }
}

<?php

class User
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function login($email, $password)
    {
        $password = hash('sha256', $password);
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($this->conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['name'] = $user['name'];
            header("location: index.php");
        } else {
            echo "Login Gagal";
        }
    }
}

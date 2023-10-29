<?php 
session_start();

require "koneksi.php";

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = hash('sha256',$_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    $rows = mysqli_num_rows($query);
    if($rows > 0){
        $row = mysqli_fetch_assoc($query);
        $_SESSION['name'] = $row['name']; 
        header("location: index.php");
    }else{
        echo "Login Gagal";
    }
}

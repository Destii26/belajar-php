<?php
session_start();

require "koneksi.php";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Menggunakan hash password

// Generate username dari nomor HP
$username = $phone;

// Set group_id menjadi 3 (admin products)
$group_id = 3;

// Query untuk menyimpan data pengguna ke database
$sql = "INSERT INTO users (name, email, phone, username, password, group_id) VALUES ('$name', '$email', '$phone', '$username', '$password', '$group_id')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil. Silakan login <a href='login.php'>di sini</a>.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// ... (koneksi ke database dan tangkap data dari formulir)

// Query untuk menyimpan data pengguna ke dalam database
$sql = "INSERT INTO users (name, email, phone, username, password, group_id) VALUES ('$name', '$email', '$phone', '$username', '$password', '$group_id')";

if ($conn->query($sql) === TRUE) {
    // Set sesi pengguna setelah registrasi berhasil
    session_start();
    $_SESSION['user_id'] = mysqli_insert_id($conn);
    $_SESSION['username'] = $username;

    // Redirect ke dashboard
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


$conn->close();

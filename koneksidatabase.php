<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "online_shop";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "Koneksi berhasil";

// Menutup koneksi
mysqli_close($conn);
?>

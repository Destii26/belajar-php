<?php

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbshop';

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    echo "Koneksi Gagal " . mysqli_connect_errno();
}

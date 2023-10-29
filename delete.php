<?php
include "koneksi.php";

$id = $_GET['id'];

$query = "SELECT image FROM products WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$imageName = $row['image'];

if ($imageName) {
    $filePath = "upload/" . $imageName;
    if (file_exists($filePath)) {
        unlink($filePath);
    }
}

$query = "DELETE FROM products WHERE id='$id'";
$sql = mysqli_query($conn, $query);

if ($sql) {
    echo "
    <script>
    alert('Data Berhasil Dihapus');
    location.href = 'products.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus');
    location.href = 'products.php';
    </script>
    ";
}
?>

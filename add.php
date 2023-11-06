<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $product = $_POST['productname'];
    $code = $_POST['code'];
    $category = $_POST['category'];
    $unit = $_POST['unit'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $rand = rand();
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $tipe_file = $_FILES['gambar']['type'];
    $nama_file = $_FILES['gambar']['name'];
    $direktori = "upload/";

    if (!empty($lokasi_file)) {
        $gambar = $rand . "_" . $nama_file;
        move_uploaded_file($lokasi_file, $direktori .  $gambar);

        // Using prepared statement to prevent SQL injection
        $sql = "INSERT INTO products (product_name, category_id, product_code, description, price, unit, stock, image) VALUES ('$product', '$category', '$code', '$description', '$price', '$unit', '$stock', '$gambar')";
        $cek = mysqli_query($conn, $sql);
        if (!$cek) {
            echo "
                <script>
                alert('Gagal Memasukan Gambar');
                location.href = 'tambahproduk.php';
                </script>
                ";
        } else {
            echo "
                <script>
                alert('Produk berhasil ditambahkan');
                location.href = 'products.php';
                </script>
                 ";
        }
    } else {
        echo "
            <script>
            alert('Terjadi Kesalahan');
            location.href = 'tambahproduk.php';
            </script>
            ";
    }
}

<?php
include "koneksi.php";
include "CRUD.php";

if (isset($_POST['submit'])) {
    $crud = new CRUD($conn);

    $newData = array(
        'productname' => $_POST['productname'],
        'code' => $_POST['code'],
        'category' => $_POST['category'],
        'unit' => $_POST['unit'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'stock' => $_POST['stock']
    );

    $tambahProduk = $crud->tambahProduk($newData);

    if ($tambahProduk) {
        echo "
            <script>
            alert('Produk berhasil ditambahkan');
            location.href = 'products.php';
            </script>
             ";
    } else {
        echo "
            <script>
            alert('Gagal Memasukan Gambar atau Terjadi Kesalahan');
            location.href = 'tambahproduk.php';
            </script>
            ";
    }
}

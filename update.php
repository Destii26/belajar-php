<?php
include "koneksi.php";
include "CRUD.php";

if (isset($_POST['submit'])) {
    $crud = new CRUD($conn);

    $updateData = array(
        'id' => $_POST['id'],
        'productname' => $_POST['productname'],
        'code' => $_POST['code'],
        'category' => $_POST['category'],
        'unit' => $_POST['unit'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'stock' => $_POST['stock'],
        'oldImage' => $_POST['oldImage']
    );

    $updateProduk = $crud->updateProduk($updateData);

    if ($updateProduk) {
        echo "
            <script>
            alert('Produk berhasil diperbaharui');
            location.href = 'products.php';
            </script>
             ";
    } else {
        echo "
            <script>
            alert('Gagal memperbarui produk atau terjadi kesalahan');
            location.href = 'editproduk.php?id=" . $_POST['id'] . "';
            </script>
            ";
    }
}

<?php
include "koneksi.php";
include "CRUD.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $crud = new CRUD($conn);

    $hapusProduk = $crud->hapusProduk($id);

    if ($hapusProduk) {
        echo "
            <script>
            alert('Data Berhasil Dihapus');
            location.href = 'products.php';
            </script>
            ";
    } else {
        echo "
            <script>
            alert('Gagal menghapus data atau data tidak ditemukan');
            location.href = 'products.php';
            </script>
            ";
    }
}

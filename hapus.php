<?php
include "database.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM products WHERE id='$id'");
echo "
<script>
alert('Data berhasil dihapus');
location.href = 'CRUDproduct.php';
</script>
";

<?php
include "database.php";

$name_product = $_POST['produk'];
$price = $_POST['harga'];
$stock = $_POST['stok'];
$description = $_POST['deskripsi'];
$discount = $_POST['diskon'];
$product_code = $_POST['code'];
$categoryid = $_POST['categoryid'];
$id = $_POST['id'];

$query = "UPDATE products set product_name='$name_product',price='$price',stock='$stock',description='$description',discount_amount='$discount',category_id='$categoryid',product_code='$product_code' WHERE id='$id'";

mysqli_query($koneksi, $query);

echo "
<script>
alert('Data berhasil diupdate');
location.href = 'CRUDproduct.php';
</script>
";

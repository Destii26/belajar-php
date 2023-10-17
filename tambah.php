<?php
include "database.php";

$name_product = $_POST['produk'];
$price = $_POST['harga'];
$stock = $_POST['stok'];
$description = $_POST['deskripsi'];
$discount = $_POST['diskon'];
$product_code = $_POST['code'];
$categoryid = $_POST['categoryid'];

$query = "INSERT INTO products (product_name,price,stock,description,discount_amount,category_id,product_code)
            VALUES('$name_product','$price','$stock','$description','$discount', '$categoryid', '$product_code')";
mysqli_query($koneksi, $query);

echo "
<script>
alert('Data berhasil ditambah');
location.href = 'CRUDproduct.php';
</script>
";

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produk html</title>
    <link rel="stylesheet" href="stylelistingproduk.css">
    <h1 class="gallery-heading">TITI GALLERY</h1>
</head>
<body>  

<?php
// Product data
$products = [
    ["asset/gambar2.jpg", "Product 1", "purple smlaaa", "Rp2.100.000"],
    ["asset/gambar1.jpg", "Product 2", "lilac mill", "Rp.2.990.00"],
    ["asset/gambar3.jpg", "Product 3", "white diamond", "Rp.2.590.00"],
    ["asset/gambar4.jpg", "Product 4", "glossy blue", "Rp.3.990.00"],
    ["asset/gambar5.jpg", "Product 5", "purple piacess", "Rp.3.679.000"],
    ["asset/gambar6.jpg", "Product 6", "glossy lilac", "Rp.5.990.00"],
    ["asset/gambar7.jpg", "Product 7", "dusty woll", "Rp.3.990.00"],
    ["asset/gambar8.jpg", "Product 8", "black star", "Rp4.000.000"],
    ["asset/gambar9.jpg", "Product 9", "white diamond class", "Rp.5.690.000"],
    ["asset/gambar10.jpg", "Product 10", "slim white star", "Rp.7.000.000"],
    ["asset/gambar11.jpg", "Product 11", "shoulder dress white", "Rp.6.990.00"],
    ["asset/gambar12.jpg", "Product 12", "blue star diamond", "Rp.4.990.00"]
];

// Loop through products
foreach ($products as $product) {
    echo '<div class="product-card">';
    echo '<img src="' . $product[0] . '">';
    echo '<div class="product-details">';
    echo '<h2 class="product-title">' . $product[1] . '</h2>';
    echo '<p class="product-description">' . $product[2] . '</p>';
    echo '<p class="product-price">' . $product[3] . '</p>';
    echo '<button class="beli-button">Beli</button>';
    echo '</div>';
    echo '</div>';
}
?>

</body>
</html>

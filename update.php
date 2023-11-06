<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $productId = $_POST['id']; 

    $productName = $_POST['productname'];
    $productCode = $_POST['code'];
    $categoryId = $_POST['category'];
    $unit = $_POST['unit'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $oldImageName = $_POST['oldImage'];

    // Proses gambar
    if ($_FILES['gambar']['name'] != '') {
       
        $rand = rand();
        $imageName = $_FILES['gambar']['name'];
        $imageTmpName = $_FILES['gambar']['tmp_name'];
        $imageSize = $_FILES['gambar']['size'];
        $imageType = $_FILES['gambar']['type'];

        $uploadPath = "upload/";

        
        $validImageExtensions = array("jpeg", "jpg", "png");

        $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);

        if (in_array($imageExtension, $validImageExtensions)) {

            unlink("upload/".$oldImageName);

         
            $gambar = $rand . "_" . $imageName;
            move_uploaded_file($imageTmpName, $uploadPath . $gambar);
        } else {
            
        }
    } else {

        $gambar = $oldImageName;
    }

    // Lakukan query UPDATE sesuai dengan informasi yang diperoleh
    $sql = "UPDATE products SET product_name = '$productName', product_code = '$productCode', category_id = '$categoryId', unit = '$unit', description = '$description', price = '$price', stock = '$stock', image = '$gambar' WHERE id = $productId";

    if (mysqli_query($conn, $sql)) {
        echo "
        <script>
        alert('Produk berhasil diperbaharui');
        location.href = 'products.php';
        </script>
         ";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

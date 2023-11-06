<?php
class Product
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addProduct($product, $category, $code, $description, $price, $unit, $stock, $image)
    {
        $sql = "INSERT INTO products (product_name, category_id, product_code, description, price, unit, stock, image) VALUES ('$product', '$category', '$code', '$description', '$price', '$unit', '$stock', '$image')";
        return mysqli_query($this->conn, $sql);
    }

    public function updateProduct($productId, $productName, $productCode, $categoryId, $unit, $description, $price, $stock, $oldImageName, $newImageName)
    {
        if ($newImageName) {
            $sql = "UPDATE products SET product_name = '$productName', product_code = '$productCode', category_id = '$categoryId', unit = '$unit', description = '$description', price = '$price', stock = '$stock', image = '$newImageName' WHERE id = $productId";
            if ($this->conn->query($sql) === TRUE) {
                if ($oldImageName) {
                    $filePath = "upload/" . $oldImageName;
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                }
                return true;
            }
        } else {
            $sql = "UPDATE products SET product_name = '$productName', product_code = '$productCode', category_id = '$categoryId', unit = '$unit', description = '$description', price = '$price', stock = '$stock' WHERE id = $productId";
            if ($this->conn->query($sql) === TRUE) {
                return true;
            }
        }
        return false;
    }

    public function deleteProduct($productId)
    {
        $query = "SELECT image FROM products WHERE id='$productId'";
        $result = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($result);
        $imageName = $row['image'];

        if ($imageName) {
            $filePath = "upload/" . $imageName;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $sql = "DELETE FROM products WHERE id='$productId'";
        return mysqli_query($this->conn, $sql);
    }
}

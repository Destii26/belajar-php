<?php

class CRUD
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function tambahProduk($data)
    {
        $product = $data['productname'];
        $code = $data['code'];
        $category = $data['category'];
        $unit = $data['unit'];
        $description = $data['description'];
        $price = $data['price'];
        $stock = $data['stock'];

        $rand = rand();
        $lokasi_file = $_FILES['gambar']['tmp_name'];
        $tipe_file = $_FILES['gambar']['type'];
        $nama_file = $_FILES['gambar']['name'];
        $direktori = "upload/";

        if (!empty($lokasi_file)) {
            $gambar = $rand . "_" . $nama_file;
            move_uploaded_file($lokasi_file, $direktori .  $gambar);

            // Menggunakan prepared statement untuk mencegah SQL injection
            $sql = "INSERT INTO products (product_name, category_id, product_code, description, price, unit, stock, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssssdsss", $product, $category, $code, $description, $price, $unit, $stock, $gambar);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    public function updateProduk($data)
    {
        $productId = $data['id'];
        $productName = $data['productname'];
        $productCode = $data['code'];
        $categoryId = $data['category'];
        $unit = $data['unit'];
        $description = $data['description'];
        $price = $data['price'];
        $stock = $data['stock'];
        $oldImageName = $data['oldImage'];

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
                unlink("upload/" . $oldImageName);
                $gambar = $rand . "_" . $imageName;
                move_uploaded_file($imageTmpName, $uploadPath . $gambar);
            } else {
                // Handle kesalahan jika ekstensi gambar tidak valid
                return false;
            }
        } else {
            // Jika tidak ada gambar baru, gunakan gambar yang lama
            $gambar = $oldImageName;
        }

        // Gunakan prepared statement untuk mencegah SQL injection
        $sql = "UPDATE products SET product_name = ?, product_code = ?, category_id = ?, unit = ?, description = ?, price = ?, stock = ?, image = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssdsssi", $productName, $productCode, $categoryId, $unit, $description, $price, $stock, $gambar, $productId);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function hapusProduk($id)
    {
        // Dapatkan nama gambar sebelum menghapus
        $query = "SELECT image FROM products WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($imageName);
            $stmt->fetch();

            // Hapus gambar jika ada
            if ($imageName) {
                $filePath = "upload/" . $imageName;
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
        }

        // Hapus produk dari database
        $queryDelete = "DELETE FROM products WHERE id=?";
        $stmtDelete = $this->conn->prepare($queryDelete);
        $stmtDelete->bind_param("i", $id);
        $stmtDelete->execute();

        if ($stmtDelete->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}

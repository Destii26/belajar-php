<?php
class Produk
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getProduk($search = '', $startFrom = 0, $dataPerPage = 5)
    {
        // Logika Anda untuk mengambil produk berada di sini
        // Gunakan $this->conn untuk koneksi ke database
        // Kembalikan hasil kueri Anda
    }

    public function getTotalProduk()
    {
        // Logika Anda untuk mendapatkan total produk berada di sini
        // Gunakan $this->conn untuk koneksi ke database
        // Kembalikan hasil kueri Anda
    }

    // Tambahkan metode lain sesuai kebutuhan untuk manajemen produk
}

<?php
include 'db.php';
$id = $_GET['id'];
// Hapus gambar dari folder
$gambar = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT gambar FROM produk WHERE id_produk=$id"))['gambar'];
if ($gambar && file_exists("uploads/$gambar")) {
    unlink("uploads/$gambar");
}
mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk=$id");
header("Location: index.php");
?>

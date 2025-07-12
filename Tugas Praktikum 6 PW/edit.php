<?php include 'db.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk=$id");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk - bracellet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <p>Nama Produk: <input type="text" name="nama" value="<?= $row['nama_produk']; ?>" required></p>
        <p>Harga: <input type="number" name="harga" value="<?= $row['harga']; ?>" required></p>
        <p>Stok: <input type="number" name="stok" value="<?= $row['stok']; ?>" required></p>
        <p>Gambar Produk (kosongkan jika tidak diubah): <input type="file" name="gambar" accept="image/*"></p>
        <button type="submit" name="update">Update</button>
        <a href="index.php">Kembali</a>
    </form>
    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        if ($_FILES['gambar']['name'] != "") {
            $gambar = $_FILES['gambar']['name'];
            $tmp = $_FILES['gambar']['tmp_name'];
            move_uploaded_file($tmp, "uploads/" . $gambar);
        } else {
            $gambar = $row['gambar'];
        }
        mysqli_query($koneksi, "UPDATE produk SET 
                                nama_produk='$nama', 
                                harga='$harga', 
                                stok='$stok', 
                                gambar='$gambar' 
                                WHERE id_produk=$id");
        header("Location: index.php");
    }
    ?>
</body>
</html>

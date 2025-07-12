<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk - bracellet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Produk Baru</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <p>Nama Produk: <input type="text" name="nama" required></p>
        <p>Harga: <input type="number" name="harga" required></p>
        <p>Stok: <input type="number" name="stok" required></p>
        <p>Gambar Produk: <input type="file" name="gambar" accept="image/*" required></p>
        <button type="submit" name="simpan">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $gambar = $_FILES['gambar']['name'];
        $tmp = $_FILES['gambar']['tmp_name'];
        $target = "uploads/" . $gambar;
        move_uploaded_file($tmp, $target);

        mysqli_query($koneksi, "INSERT INTO produk (nama_produk, harga, stok, gambar) 
                                VALUES ('$nama', '$harga', '$stok', '$gambar')");
        header("Location: index.php");
    }
    ?>
</body>
</html>

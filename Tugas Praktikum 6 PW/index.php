<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>bracellet - Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Produk - bracellet</h1>
    <a href="tambah.php">Tambah Produk Baru</a>
    <br><br>
    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($koneksi, "SELECT * FROM produk");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td><img src='uploads/{$row['gambar']}'></td>
                <td>{$row['nama_produk']}</td>
                <td>Rp " . number_format($row['harga']) . "</td>
                <td>{$row['stok']}</td>
                <td>
                    <a href='edit.php?id={$row['id_produk']}'>Edit</a>
                    <a href='hapus.php?id={$row['id_produk']}' onclick=\"return confirm('Yakin ingin hapus?')\">Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>

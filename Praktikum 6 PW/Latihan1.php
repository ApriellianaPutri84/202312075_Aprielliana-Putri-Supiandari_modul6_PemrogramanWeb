<!DOCTYPE html>
<html>
<head>
  <title>Latihan Kondisi PHP</title>
</head>
<body>
  <h1>Cek Nilai</h1>
  <?php
  $nilai = 98;
  echo "<p>Nilai Anda: $nilai</p>";

  // Penilaian kelulusan
  if ($nilai >= 75) {
    echo "<p style='color:green;'>Selamat, Anda Lulus!</p>";
  } else {
    echo "<p style='color:red;'>Maaf, Anda perlu belajar lagi.</p>";
  }
  // Kategori nilai
  if ($nilai > 90) {
    echo "<p>Kategori: <strong>Sangat Baik</strong></p>";
  } elseif ($nilai > 80) {
    echo "<p>Kategori: <strong>Baik</strong></p>";
  } elseif ($nilai > 70) {
    echo "<p>Kategori: <strong>Cukup</strong></p>";
  } else {
    echo "<p>Kategori: <strong>Kurang</strong></p>";
  }
  ?>
</body>
</html>


<!-- Latihan GET -->
<?php 
// cek apakan user tidak membawa data dari $_GET
//isset() apakah sebuat variable sudah di buaat atau belum
if (!isset($_GET["nama_get"]) ||
    !isset($_GET["nim_get"]) ||
    !isset($_GET["email_get"]) ||
    !isset($_GET["jurusan_get"]) ){ // jika nama_get belum di buat, lakukan sesuatu
  // redirect
  header("Location:latihan.php"); // kembali ke halaman latihan1.php
  exit; // agar script yang di bawah tidak di eksekusi
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h1>Detail Mahasiswa</h1>
  <ul>
    <li><?= $_GET["nama_get"]?></li>
    <li><?= $_GET["nim_get"]?></li>
    <li><?= $_GET["email_get"]?></li>
    <li><?= $_GET["jurusan_get"]?></li>
  </ul>
  <a href="latihan.php">Kembali</a>
</body>
</html>